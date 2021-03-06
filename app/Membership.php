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
        'name', 'price',
    ];

    public function users()
    {
        return $this->hasMany('App\User', 'memberships_id');
    }
}
