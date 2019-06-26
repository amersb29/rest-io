<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Notebook extends Model
{
    public function producto()
    {
        return $this->belongsTo(Product::class);
    }
}
