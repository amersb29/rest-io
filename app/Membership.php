<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Membership extends Model
{
    public function users()
    {
        return $this->hasMany('App\User', 'memberships_id');
    }
}
