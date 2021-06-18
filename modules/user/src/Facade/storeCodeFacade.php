<?php

namespace User\Facade;

use Illuminate\Support\Facades\Facade;

class storeCodeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'storeCodeFacade';  
    }
}