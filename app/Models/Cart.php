<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;

    public const SESSION_TOKEN = 'session_token';

    protected $fillable = [
        'user_id',
        'session_token',
        'total_items',
        'total_price',
        'total_sale_price',
        'coupon_code',
        'discount',
        'final_price',
    ];

    public function items()
    {
        return $this->hasMany(CartItem::class, 'cart_id');
    }
}
