<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'order_id',
        'workbook_id',
        'workbook_color',
        'pdf_id',
        'pdf_color',
        'price',
        'slae_price'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
        ];
    }

    public function workbook()
    {
        return $this->hasOne('App\Models\Workbook', 'id', 'workbook_id');
    }

    public function pdf()
    {
        return $this->hasOne('App\Models\Pdf', 'id', 'pdf_id');
    }
}
