<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sede;

class Banner extends Model
{
    protected $fillable = [
        'sedes_id', 'image', 'status'
    ];

    public function sedes()
    {
        return $this->belongsTo(Sede::class);
    }
}