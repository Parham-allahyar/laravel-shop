<?php

namespace Seller\Responses;

use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Response;
use Seller\Http\Resources\SellerResource;


class JsonResponse extends Facade
{
    public function failedResponse()
    {
        return response()->json('faild', Response::HTTP_BAD_REQUEST);
    }


    public function sellerProducts($products)
    {
        return new SellerResource($products);
    }
}
