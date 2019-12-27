<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class Sede extends Model
{
    protected $fillable = [
        'countries_id', 'name', 'code', 'calendar'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    
    public function banners()
    {
        return $this->hasMany('App\Banner', 'sede_id');
    }
}