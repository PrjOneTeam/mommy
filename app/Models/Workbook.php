<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workbook extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'color_pick',
        'image_bw',
        'image_color',
        'image_both',
        'status',
        'files_bw',
        'files_color',
        'file_both',
        'size',
        'file_format',
        'price',
        'price_both',
        'sale_price',
        'sale_price_both',
        'grade',
        'topic',
    ];

    protected $casts = [
        'topic' => 'array',
    ];

    public function slug()
    {
        return $this->hasOne('App\Models\Slug', 'workbook_id', 'id');
    }
}
