<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role', 'assigned_roles');
    }

    public function paymentMethods()
    {
        return $this->belongsToMany('App\PaymentMethod', 'assigned_payment_methods');
    }

    public function membership()
    {
        return $this->belongsTo('App\Membership', 'memberships_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'assigned_products');
    }

    public function payments() 
    {
        return $this->hasMany(Payment::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function hasRoles(array $roles)
    {
      return $this->roles->pluck('name')->intersect($roles)->count();
    }

    public function isAdmin()
    {
      return $this->hasRoles(['admin']);
    }
}
