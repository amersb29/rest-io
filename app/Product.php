<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Video;
use App\Notebook;

class Product extends Model
{
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function cuaderno()
    {
        return $this->hasOne(Notebook::class);
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'assigned_products');
    }
}
