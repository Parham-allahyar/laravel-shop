<?php

namespace Category\Facade;

use Illuminate\Support\Facades\Facade;
use Category\Responses\HtmlRes;
use Category\Responses\JsonResponse;


class ResponderFacade extends Facade
{

   

    protected static function getFacadeAccessor()
    {

        $request = request('client');

        if ($request == 'html') {
            return HtmlRes::class;
        }else 
      
            return JsonResponse::class;
        
    }
}
