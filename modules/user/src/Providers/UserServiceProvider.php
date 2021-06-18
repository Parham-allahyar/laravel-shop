<?php

namespace User\Providers;

use Illuminate\Support\ServiceProvider;

use User\Repositorie\UserRepository;
use User\implement\storeCode;
use User\implement\token;

class UserServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }


    public function register()
    {
        $this->userProvider();
        $this->storeCode();
        $this->token();
    }

    public function userProvider()
    {
        $this->app->bind('userProviderFacade', function () {
            return new UserRepository();
        });
    }
    public function storeCode()
    {
        $this->app->bind('storeCodeFacade', function () {
            return new storeCode();
        });
    }
    public function token()
    {
        $this->app->bind('TokenFacade', function () {
            return new token();
        });
    }
}
