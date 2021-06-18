<?php

namespace Comment\Facade;

use Illuminate\Support\Facades\Facade;
use Comment\Responses\HtmlRes;
use Comment\Responses\JsonResponse;


class ResponderFacade extends Facade
{
    protected static function getFacadeAccessor()
    {

        $request = request('client');
        if ($request == 'html') return HtmlRes::class;
        return JsonResponse::class;
    }
}
