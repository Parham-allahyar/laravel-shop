<?php

namespace Address\Facade;

use Illuminate\Support\Facades\Facade;
use Address\Responses\HtmlRes;
use Address\Responses\JsonResponse;


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
