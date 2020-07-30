<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\Notebook;
use App\TipoProducto;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
 
    protected $fillable = [
        'tipo_producto_id', 'name', 'image', 'document', 'description'
    ];

    public function tipoProducto()
    {
        return $this->belongsTo('App\TipoProducto', 'tipo_producto_id');
    }

    public function videos(): HasMany
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

    public function payments(): BelongsTo
    {
        return $this->belongsToMany('App\Payment', 'assigned_purchase_product');
    }
}
