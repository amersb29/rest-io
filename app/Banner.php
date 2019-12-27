<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sede;

class Banner extends Model
{
    protected $fillable = [
        'sede_id', 'image', 'status'
    ];

    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }
}