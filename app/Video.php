<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Video extends Model
{
    protected $fillable = [
        'product_id', 'name', 'vimeo_id', 'is_preview'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
