<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Order;

class PurchaseController extends Controller {
    public function index() {
        $dataList = Order::where('customer_id', 5)
            ->where('status', 'purchased')
            ->get();
        return view('user-site.purchase', [
            'dataList' => $dataList
        ]);
    }
}

