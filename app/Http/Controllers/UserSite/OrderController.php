<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {
    public function index() {
        $userInfo = Auth::user();
        $dataList = Order::where('customer_id', $userInfo->id)
            ->where('status', 'ordered')
            ->get();
        return view('user-site.order', [
            'dataList' => $dataList
        ]);
    }
}

