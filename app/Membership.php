<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Membership extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tipo_producto_id', 'courses', 'conferences'
    ];

    public function users()
    {
        return $this->hasMany('App\User', 'memberships_id');
    }

    public function tipoProducto()
    {
        return $this->belongsTo('App\TipoProducto', 'tipo_producto_id');
    }
}
