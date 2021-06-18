<?php

namespace Address\Responses;

use Address\Http\Resources\AddressResource;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Response;

class JsonResponse extends Facade
{
    public function index($address)
    {
        $allAddresss =  new AddressResource($address);
        return response($allAddresss, Response::HTTP_OK);
    }

    public function CreatedResponse()
    {
        return response('Done', Response::HTTP_CREATED);
    }

    public function DeletedResponse()
    {
        return response('Done', Response::HTTP_OK);
    }
    public function UpdatesResponse()
    {
        return response('Done', Response::HTTP_OK);
    }
    public function EditResponse($address)
    {
        $address =  new AddressResource($address);
        return response($address, Response::HTTP_OK);
    }

    public function FaildResponse()
    {
        return response('Action Faild',Response::HTTP_BAD_REQUEST);
    }

    public function userAddressResponse($address)
    {
        $address =  new AddressResource($address);
        return response($address, Response::HTTP_OK);
    }
}
