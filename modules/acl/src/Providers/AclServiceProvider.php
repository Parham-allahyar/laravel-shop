<?php

namespace Acl\Providers;

use Illuminate\Support\ServiceProvider;
use Acl\Http\Middleware\PermissionMiddleware;
use Acl\Http\Middleware\RoleMiddleware;

use Acl\Responses\JsonResponse;
use Acl\Repositorie\RoleRepository;
use Acl\Repositorie\PermissionRepository;

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
        $this->roleProvider();
        $this->PermissionProvider();
    }


    public function roleProvider()
    {
        $this->app->bind('roleProviderFacade', function () {
            return new RoleRepository() ;
        });
    }

    public function PermissionProvider()
    {
        $this->app->bind('permissionProviderFacade', function () {
            return new PermissionRepository() ;
        });
    }

  

}
