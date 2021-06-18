<?php

namespace Seller\Providers;

use Illuminate\Support\ServiceProvider;
use Seller\Repositorie\SellerRepository;
use Seller\token\token;


class SellerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }


    public function register()
    {
        $this->sellerProvider();
        $this->token();
    }


    public function sellerProvider()
    {
        $this->app->bind('sellerProviderFacade', function () {
            return new SellerRepository();
        });
    }
    public function token()
    {
        $this->app->bind('TokenFacade', function () {
            return new token();
        });
    }
    
}
