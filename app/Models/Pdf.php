<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pdf extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'grade',
        'topic',
        'image_bw',
        'image_color',
        'status',
        'files_bw',
        'files_color',
        'price',
        'sale_price',
        'related_workbook',
    ];

    protected $casts = [
        'topic' => 'array',
        'related_workbook' => 'array',
    ];

    public function relatedWorkbooks()
    {
        return $this->hasMany('App\Models\Workbook', 'id', 'related_workbook');
    }
}
