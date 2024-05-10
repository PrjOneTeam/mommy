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

    public function slug()
    {
        return $this->hasOne('App\Models\Slug', 'pdf_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'pdf_id', 'id')->limit(10)->orderBy('created_at', 'desc');
    }
}
