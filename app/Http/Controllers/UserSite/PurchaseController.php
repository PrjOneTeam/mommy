<?php

namespace App\Http\Controllers\UserSite;

use App\Helpers\File;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller {
    public function __construct(
        private readonly File $file,
    ) {
    }
    public function index() {
        $user = Auth::user();
        $dataList = Order::where('customer_id', $user->id)
            ->where('status', 'purchased')
            ->get();
        return view('user-site.purchase', [
            'dataList' => $dataList
        ]);
    }
}

