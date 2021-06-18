<?php

namespace Acl\Providers;

use Illuminate\Support\ServiceProvider;
use Acl\Http\Middleware\PermissionMiddleware;
use Acl\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Acl\Database\Models\Permission;

class AclServiceProvider extends ServiceProvider
{

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->app['router']->aliasMiddleware('permission', PermissionMiddleware::class);
        $this->app['router']->aliasMiddleware('role', RoleMiddleware::class);


       
    }


    public function register()
    {
    }
}
