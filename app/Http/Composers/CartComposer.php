<?php

namespace App\Http\Composers;

use App\Models\Cart;
use Illuminate\View\View;
use App\Repositories\CartRepository;

class CartComposer
{
    protected $cartRepository;

    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function compose(View $view)
    {
        if (request()->cookie(Cart::SESSION_TOKEN)) {
            $cart = $this->cartRepository->getCurrentCart(request()->cookie(Cart::SESSION_TOKEN));
        } else {
            $cart = null;
        }
        $view->with('cart', $cart);
    }
}
