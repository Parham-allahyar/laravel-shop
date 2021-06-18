<?php

namespace Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Admin\Repositorie\AdminRepository;


class AdminServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }


    public function register()
    {
        $this->adminProvider();  
    }


    public function adminProvider()
    {
        $this->app->bind('adminProviderFacade', function () {
            return new AdminRepository();
        });
    }
   
}
