<?php

namespace Acl\Facade;

use Illuminate\Support\Facades\Facade;

class permissionProviderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
       
        return 'permissionProviderFacade';  
    }
}