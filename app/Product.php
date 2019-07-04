<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\Notebook;
use App\TipoProducto;

class Product extends Model
{
 
    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function notebook()
    {
        return $this->hasOne(Notebook::class);
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'assigned_products');
    }

    public function purchases()
    {
        return $this->belongsToMany('App\Purchase', 'assigned_purchase_product');
    }
}
