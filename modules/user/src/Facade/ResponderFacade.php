<?php

namespace User\Facade;

use Illuminate\Support\Facades\Facade;
use User\Responses\HtmlRes;
use User\Responses\JsonResponse;


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
