<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        public Order $order
    )
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $lists = $this->providerListProduct($this->order);

        return $this->view('user-site.mail', [
            'order' => $this->order,
            'lists' => $lists
        ]);
    }

    public function providerListProduct(Order $order): array
    {
        $lists = [];
        foreach ($order->detail as $item) {
            $worksheet = $item->workbook ?? $item->pdf;
            $name = $worksheet->name;
            $slug = $worksheet->slug->slug;
            $color = $item->workbook_color ?? $item->pdf_color;
            $lists[] = [
                'name' => $name,
                'color' => $color,
                'slug' => $slug,
            ];
        }

        return $lists;
    }
}
