<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Acl\Database\Models\Permission;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];


    public function boot()
    {
        $this->registerPolicies();
        // Auth::loginUsingId(1);
        // foreach (Permission::all() as $permission) {
        //     Gate::define($permission->name, function ($user) use ($permission) {
        //         return $user->hasPermission($permission);
        //     });
        // }
    }
}
