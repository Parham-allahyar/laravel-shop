<?php

namespace Order\Providers;

use Illuminate\Support\ServiceProvider;
use Order\Repositorie\OrderRepository;

class OrderServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    }


    public function register()
    {
        $this->orderProvider();
    }

    public function orderProvider()
    {
        
        $this->app->bind('OrderProviderFacade', function () {
            return new OrderRepository();
        });
    }

   
}
