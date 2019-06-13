<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Project -> projects
    // protected $table = 'projects';

    protected $fillable = ['title', 'description'];
}
