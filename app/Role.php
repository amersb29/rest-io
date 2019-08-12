<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
  protected $fillable = [
      'name', 'description',
  ];

  public function users()
  {
    return $this->belongsToMany('App\User', 'assigned_roles');
  }

  public function permissions()
  {
    return $this->belongsToMany('App\Permission', 'assigned_permissions');
  }
  
}
