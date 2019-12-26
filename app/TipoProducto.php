<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $fillable = [
        'description', 'price',
    ];

    public function products()
    {
        $this->hasMany('App\Product','tipo_producto_id');
    }
}
