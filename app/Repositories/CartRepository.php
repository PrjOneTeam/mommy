<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Cookie;

class CartRepository extends Repository
{
    public function __construct(Cart $article)
    {
        parent::__construct($article);
    }

    public function createSessionToken(?int $minutes = 10080): string
    {
        $token = md5(time() . rand(1, 1000));

        Cookie::queue(
            Cart::SESSION_TOKEN,
            $token,
            $minutes
        );

        return $token;
    }

    public function getBySessionToken(string $token): ?Cart
    {
        return $this->model->where('session_token', $token)->first();
    }

    public function getByUserId(int $userId): ?Cart
    {
        return $this->model->where('user_id', $userId)->first();
    }
}
