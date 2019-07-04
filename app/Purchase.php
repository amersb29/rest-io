<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'assigned_purchase_product');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
