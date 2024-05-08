<?php

namespace App\Http\Controllers\UserSite;

use App\Enums\Color;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Repositories\CartRepository;
use App\Repositories\SlugRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CartController extends Controller
{
    public function __construct(
        private readonly CartRepository $cartRepository,
        private readonly SlugRepository $slugRepository,
    ) {
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        $sessionToken = $request->cookie(Cart::SESSION_TOKEN);
        $cart = $user? $this->cartRepository->getByUserId($user->id) :$this->cartRepository->getBySessionToken($sessionToken);

        return view('user-site.cart', [
            'cart' => $cart,
        ]);
    }

    public function addCart(Request $request)
    {
        $request->validate([
            'slug' => 'required|string',
            'color' => ['nullable', Rule::in(Color::all())],
        ]);

        $slug = $this->slugRepository->findBySlug($request->post('slug'));

        if (!$slug) {
            return redirect()->back()->with('error', __('Something went wrong'));
        }

        $user = Auth::user();

        $sessionToken = $request->cookie(Cart::SESSION_TOKEN) ?? $this->cartRepository->createSessionToken();
        $cart = $user? $this->cartRepository->getByUserId($user->id) :$this->cartRepository->getBySessionToken($sessionToken);

        $worksheet = $slug->pdf ?? $slug->workbook;
        $price = $worksheet->price;
        $salePrice = $worksheet->sale_price;;
        $finalPrice = $this->calculateFinalPrice($price, $salePrice);

        if (!$cart) {
            $cart = $this->cartRepository->create([
                'session_token' => $sessionToken,
                'total_price' => $price,
                'total_sale_price' => $salePrice,
                'final_price' => $finalPrice,
            ]);
        } else {
            $data = [
                'total_price' => $cart->total_price + $price,
                'final_price' => $cart->final_price + $finalPrice,
            ];

            if ($salePrice !== null ) {
                if ($cart->total_sale_price === null) {
                    $data['total_sale_price'] = $salePrice;
                } else {
                    $data['total_sale_price'] = $cart->total_sale_price + $salePrice;
                }
            }

            $this->cartRepository->update($cart, $data);
        }

        $items = $cart->items;
        $addFlag = true;
        foreach ($items as $item) {
            if ($item->worksheet_slug == $slug->slug) {
                $addFlag = false;
                break;
            }
        }

        if ($addFlag) {
            $cart->items()->create([
                'worksheet_name' => $slug->workbook->name ?? $slug->pdf->name,
                'worksheet_slug' => $slug->slug,
                'price' => $price,
                'sale_price' => $salePrice,
                'color' => $request->post('color') ?? Color::BW,
                'final_price' => $finalPrice,
            ]);
        }

        return redirect()->route('cart')->with(['success' => __('Item added to cart')]);
    }

    public function calculateFinalPrice(
        ?float $price = null,
        ?float $salePrice = null,
        ?string $couponCode = null
    ): float
    {
        return $salePrice ?? $price;
    }

    public function removeItem(Request $request)
    {
        $itemId = $request->post('item_id');

        $user = Auth::user();

        $sessionToken = $request->cookie(Cart::SESSION_TOKEN);
        $cart = $user? $this->cartRepository->getByUserId($user->id) :$this->cartRepository->getBySessionToken($sessionToken);

        if (!$cart) {
            return redirect()->back()->with('error', __('Something went wrong'));
        }

        $item = $cart->items()->find($itemId);

        if (!$item) {
            return redirect()->back()->with('error', __('Something went wrong'));
        }

        $price = $item->price;
        $salePrice = $item->sale_price;
        $finalPrice = $this->calculateFinalPrice($price, $salePrice);

        $data = [
            'total_price' => $cart->total_price - $price,
            'final_price' => $cart->final_price - $finalPrice,
        ];

        if ($salePrice !== null ) {
            $data['total_sale_price'] = $cart->total_sale_price - $salePrice;
        }

        $item->delete();
        $cart->update($data);

        return redirect()->route('cart')->with(['success' => __('Item removed from cart')]);
    }
}

