<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'assigned_coupons');
    }
}
