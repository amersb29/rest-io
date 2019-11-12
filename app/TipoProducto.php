<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $fillable = [
        'description',
    ];

    public function products()
    {
        $this->hasMany(Product::class);
    }
}
