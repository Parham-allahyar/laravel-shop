<?php

namespace Acl\Trait;

use Acl\Database\Models\Permission;
use Acl\Database\Models\Role;

trait HasPermission
{
  public function permissions()
  {
      return $this->morphToMany(Permission::class, 'taggable');
  }
  public function roles()
  {
      return $this->morphToMany(Role::class, 'taggable');
  }
}
