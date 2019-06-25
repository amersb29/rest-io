<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memberships extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(Users::class);
    }
}
