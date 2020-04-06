<?php

namespace App;

use App\Membership;
use App\Notifications\PasswordResetNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Passport\HasApiTokens;

use App\Payment;


class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'memberships_id', 'countries_id', 'state'
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

    public function country()
    {
        return $this->belongsTo('App\Country', 'countries_id');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany('App\Role', 'assigned_roles');
    }

    public function paymentMethods()
    {
        return $this->belongsToMany('App\PaymentMethod', 'assigned_payment_methods');
    }

    public function coupons()
    {
        return $this->belongsToMany('App\Coupon', 'assigned_coupons');
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

    public function hasRoles(array $roles)
    {
      return $this->roles->pluck('name')->intersect($roles)->count();
    }

    public function isAdmin()
    {
      return $this->hasRoles(['admin']);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordResetNotification($token));
    }
}
