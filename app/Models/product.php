<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product-name',
        'product-description',
        'price',
        'quantity',
        'product-image',
        'user_id'
    ];
    // public function user(): BelongsTo 
    // { return $this->belongsTo(User::class);
    // }
}
