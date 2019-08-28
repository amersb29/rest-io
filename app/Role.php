<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
  protected $fillable = [
      'name', 'description',
  ];

  public function users(): BelongsToMany
  {
    return $this->belongsToMany('App\User', 'assigned_roles');
  }

  public function permissions()
  {
    return $this->belongsToMany('App\Permission', 'assigned_permissions');
  }
  
}
