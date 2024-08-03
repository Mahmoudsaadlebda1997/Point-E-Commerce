<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductMedia extends Model
{
    protected $fillable = [
        'image',
        'type',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}