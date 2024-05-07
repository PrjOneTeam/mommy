<?php

namespace App\Repositories;

use App\Models\CartItem;
use App\Repositories\Repository;

class CartItemRepository extends Repository
{
    public function __construct(CartItem $article)
    {
        parent::__construct($article);
    }
}
