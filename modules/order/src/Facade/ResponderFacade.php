<?php

namespace Order\Facade;

use Illuminate\Support\Facades\Facade;
use Order\Responses\HtmlRes;
use Order\Responses\JsonResponse;


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
