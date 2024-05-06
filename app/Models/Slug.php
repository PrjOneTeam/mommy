<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slug extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'workbook_id',
        'pdf_id',
    ];

    public $timestamps = false;

    public function workbook()
    {
        return $this->hasOne('App\Models\Workbook', 'id', 'workbook_id');
    }

    public function pdf()
    {
        return $this->hasOne('App\Models\Pdf', 'id', 'pdf_id');
    }
}
