<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'workbook_id',
        'public_name',
        'rate',
        'review'
    ];

    public function workbook()
    {
        return $this->belongsTo(Workbook::class);
    }
}
