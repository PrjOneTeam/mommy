<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentInfo extends Model
{
    use HasFactory;

    protected $table = 'payment_info';

    protected $fillable = [
        'bank_name',
        'card_name',
        'card_number',
    ];
}
