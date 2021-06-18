<?php

namespace Address\Providers;

use Illuminate\Support\ServiceProvider;
use Address\Repositorie\AddressRepository;
use Address\Database\Models\Address;

class AddressServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . './../routes/routes.php');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }


    public function register()
    {
        $this->AddressProvider();
    }

    public function AddressProvider()
    {
        $this->app->bind('AddressProviderFacade', function () {
            return new AddressRepository();
        });
    }
}
