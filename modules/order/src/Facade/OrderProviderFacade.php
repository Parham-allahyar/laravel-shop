<?php

namespace Order\Facade;

use Illuminate\Support\Facades\Facade;

class OrderProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
       
        return 'OrderProviderFacade';  
    }
}