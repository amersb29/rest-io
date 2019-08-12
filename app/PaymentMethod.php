<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];
    
    public function users()
    {
        return $this->belongsToMany('App\User', 'assigned_payment_methods');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
