<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedProducts extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'type', 'valid_until'
    ];

}