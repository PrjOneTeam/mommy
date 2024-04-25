<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pdf_id',
        'public_name',
        'rate',
        'review'
    ];

    public function pdf()
    {
        return $this->belongsTo(Pdf::class);
    }
}
