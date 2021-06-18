<?php

namespace Order\Responses;

use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Response;

class JsonResponse extends Facade
{
    public function AddresNotFound()
    {
        return response()->json('Addres Notfound', Response::HTTP_BAD_REQUEST);
    }
    public function userNotAuthenticated()
    {
        return response()->json('user Not Authenticated', Response::HTTP_FORBIDDEN);
    }
    public function paymentFail()
    {
        return response()->json('payment Fail', Response::HTTP_BAD_REQUEST);
    }
    public function ProductIsNotAvailable()
    {
        return response()->json('Product Is NotAvailable', Response::HTTP_BAD_REQUEST);
    }
}