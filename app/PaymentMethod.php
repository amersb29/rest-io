<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'assigned_payment_methods');
    }
}
