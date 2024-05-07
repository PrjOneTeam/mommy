<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'cart_id',
        'worksheet_name',
        'worksheet_slug',
        'quantity',
        'color',
        'price',
        'sale_price',
    ];

    public $timestamps = false;

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
