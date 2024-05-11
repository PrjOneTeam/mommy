<?php

namespace App\Repositories;

use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Slug;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderRepository extends Repository
{
    public function __construct(Order $order)
    {
        parent::__construct($order);
    }

    public function createByCart(Cart $cart, array $customerInfo): Order
    {
        $customer = Auth::user();
        $full_name = $customer ? $customer->first_name . ' ' . $customer->last_name : $customerInfo['full_name'];
        $email = $customer ? $customer->email : $customerInfo['email'];
        $order = $this->create([
            'customer_id' => $customer->id ?? null,
            'total' => $cart->final_price,
            'bill_info' => $full_name,
            'status' => Order::ORDERED_STATUS,
            'bill_code' => $customerInfo['bill_code'],
            'full_name' => $full_name,
            'email' => $email,
        ]);

        foreach ($cart->items as $item) {
            $slug = Slug::where('slug', $item->worksheet_slug)->first();

            if (!$slug) continue;

            $order->detail()->create([
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

    public function isPurchase(int $worksheetId): bool
    {
        $customer = Auth::user();

        if (!$customer) {
            return false;
        }

        $result = DB::table('orders as o')
            ->select('od.id')
            ->join('order_details as od', 'o.id', '=', 'od.order_id')
            ->where([
                'o.customer_id' => $customer->id,
                'o.status' => Order::PURCHASED_STATUS,
            ])
            ->where(function ($q) use ($worksheetId) {
                $q->where('od.workbook_id', $worksheetId)
                    ->orWhere('od.pdf_id', $worksheetId);
            })
            ->get();

        return count($result) > 0;
    }

    public function getTotalOrderCurrentDay(): int
    {
        $today = now()->startOfDay();
        return DB::table('orders as o')->whereDate('created_at', $today)->count();
    }

    public function sendMail(Order $order)
    {
        $email = $order->email;
        Mail::to($email)->send(new OrderMail($order));
    }
}
