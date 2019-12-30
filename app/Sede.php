<?php

namespace App;

use App\Banner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sede extends Model
{
    protected $fillable = [
        'countries_id', 'name', 'code', 'calendar'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country', 'countries_id');
    }
    
    public function banners(): HasMany
    {
        return $this->hasMany(Banner::class);
    }
}