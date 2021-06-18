<?php

namespace Acl\Traits;
use Illuminate\Support\Facades\Auth;

trait HasPermissions
{
    
    public function hasRole($roles)
    {
        return !!$roles->intersect($this->roles)->all();
    }

    public function hasPermission($permission)
    {
        //dd(auth()->user()->first_name);
        
       $user = Auth::user();
       //dd($user->permissions-);
        return  $user->permissions->contains('name', $permission->name) || $this->hasRole($permission->roles);
    }
    
}
