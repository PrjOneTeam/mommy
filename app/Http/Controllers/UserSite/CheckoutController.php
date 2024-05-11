<?php

namespace App\Http\Controllers\UserSite;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\PaymentInfo;
use App\Repositories\CartRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __construct(
        private readonly CartRepository $cartRepository,
        private readonly OrderRepository $orderRepository,
    ) {
    }

    public function index(Request $request)
    {
        $cart = $this->cartRepository->getCurrentCart($request->cookie(Cart::SESSION_TOKEN));

        if (!$cart) {
            return redirect()->route('cart')->with('error', __('Cart is empty'));
        }
        $currentDate = new \DateTime();
        $count = $this->orderRepository->getTotalOrderCurrentDay();
        $billCode = $currentDate->format('md') . str_pad($count + 1, 3, '0', STR_PAD_LEFT);

        return view('user-site.checkout', [
            'cart' => $cart,
            'payment' => PaymentInfo::first(),
            'billCode' => $billCode,
        ]);
    }

    public function placeOrder(Request $request)
    {
        $cart = $this->cartRepository->getCurrentCart($request->cookie(Cart::SESSION_TOKEN));

        if (!$cart) {
            return redirect()->route('cart')->with('error', __('Cart is empty'));
        }

        $customerInfo = [
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'bill_code' => $request->input('bill_code'),

        ];

        $this->orderRepository->createByCart($cart, $customerInfo);

        return Auth::user() ?redirect()->route('order') : redirect()->route('user-site-home');
    }
}

