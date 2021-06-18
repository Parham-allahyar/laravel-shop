<?php

namespace Product\Facade;

use Illuminate\Support\Facades\Facade;
use Product\Responses\HtmlResponse;
use Product\Responses\JsonResponse;


class ResponderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {

        $request = request('client');

        if ($request == 'html') {
            return HtmlResponse::class;
        }

        return JsonResponse::class;
    }
}
