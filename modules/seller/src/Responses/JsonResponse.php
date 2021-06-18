<?php

namespace Seller\Responses;

use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Response;


class JsonResponse extends Facade
{
    public function failedResponse()
    {
       return response()->json('faild',Response::HTTP_BAD_REQUEST);
    }
}