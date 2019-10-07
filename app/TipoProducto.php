<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    public function products()
    {
        $this->hasMany(Product::class);
    }
}
