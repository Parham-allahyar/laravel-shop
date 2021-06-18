<?php

namespace Seller\Facade;

use Illuminate\Support\Facades\Facade;
use Seller\Responses\HtmlRes;
use Seller\Responses\JsonResponse;


class ResponderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {

        $request = request('client');

        if ($request == 'html') {
            return HtmlRes::class;
        }

        return JsonResponse::class;
    }
}
