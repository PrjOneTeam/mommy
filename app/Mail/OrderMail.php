<?php

namespace App\Mail;

use App\Enums\Color;
use App\Models\Order;
use Illuminate\Bus\Queueable;
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

        return $this
            ->subject('[Mommy Me Station] Tải về sản phẩm')
            ->view('user-site.mail', [
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

    // Dinh kem file vao email thay vi link download
//    public function build()
//    {
//        $lists = $this->providerListProduct($this->order);
//        $result =  $this->view('user-site.mail', [
//            'order' => $this->order,
//            'lists' => $lists
//        ]);
//        foreach ($lists as $worksheet) {
//            $result->attach(storage_path($worksheet['attachPath']));
//        }
//
//        return $result;
//    }
//
//    public function providerListProduct(Order $order): array
//    {
//        $lists = [];
//        foreach ($order->detail as $item) {
//            $worksheet = $item->workbook ?? $item->pdf;
//            $name = $worksheet->name;
//            $color = $item->workbook_color ?? $item->pdf_color;
//            if ($color == Color::BW) {
//                $attachPath = $worksheet->files_bw;
//            }
//            if ($color == Color::COLOR || $attachPath == null) {
//                $attachPath = $worksheet->files_color;
//            }
//            if ($color == Color::BOTH || $attachPath == null) {
//                $attachPath = $worksheet->files_both;
//            }
//            $lists[] = [
//                'name' => $name,
//                'attachPath' => $attachPath
//            ];
//        }
//
//        return $lists;
//    }
}
