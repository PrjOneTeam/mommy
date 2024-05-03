<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller {
    public function index() {
        $dataList = Order::where('customer_id', 5)
            ->where('status', 'ordered')
            ->get();
        return view('user-site.purchase', [
            'dataList' => $dataList
        ]);
    }
}

