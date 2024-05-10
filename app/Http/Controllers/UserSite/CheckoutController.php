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

        return view('user-site.checkout', [
            'cart' => $cart,
            'payment' => PaymentInfo::first(),
        ]);
    }

    public function placeOrder(Request $request)
    {
        $cart = $this->cartRepository->getCurrentCart($request->cookie(Cart::SESSION_TOKEN));

        if (!$cart) {
            return redirect()->route('cart')->with('error', __('Cart is empty'));
        }

        if (!Auth::user()) {
            return redirect()->route('user-site.login');
        }

        $this->orderRepository->createByCart($cart);

        return redirect()->route('order');
    }
}

