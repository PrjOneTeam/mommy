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
        $cart = $this->cartRepository->getCurrentCart(request()->cookie(Cart::SESSION_TOKEN));
        $view->with('cart', $cart);
    }
}
