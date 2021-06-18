<?php

namespace Admin\Facade;

use Illuminate\Support\Facades\Facade;

class adminProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'adminProviderFacade';  
    }
}