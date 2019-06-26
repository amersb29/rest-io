<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Video extends Model
{
    public function producto()
    {
        return $this->belongsTo(Product::class);
    }
}
