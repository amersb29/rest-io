<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
  protected $fillable = [
      'name', 'display_name',
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
