<?php

namespace Address\Facade;

use Illuminate\Support\Facades\Facade;

class AddressProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
       
        return 'AddressProviderFacade';  
    }
}