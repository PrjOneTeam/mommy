<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Slug;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Auth;

class OrderRepository extends Repository
{
    public function __construct(Order $order)
    {
        parent::__construct($order);
    }

    public function createByCart(Cart $cart)
    {
        $customer = Auth::user();
        $order = $this->create([
            'customer_id' => $customer->id,
            'total' => $cart->final_price,
            'bill_info' => $customer->first_name . ' ' . $customer->last_name,
            'status' => Order::ORDERED_STATUS,
        ]);

        foreach ($cart->items as $item) {
            $slug = Slug::where('slug', $item->slug)->first();

            if (!$slug) continue;

            $order->items()->create([
                'order_id' => $order->id,
                'workbook_id' => $slug->workbook_id,
                'pdf_id' => $slug->pdf_id,
                'workbook_color' => $item->color,
                'price' => $item->price,
                'sale_price' => $item->sale_price,
            ]);
        }

        $cart->delete();

        return $order;
    }
}
