<?php

namespace Product\Responses;

use Illuminate\Support\Facades\Facade;
use Product\Http\Resources\ProductResource;
use Illuminate\Http\Response;

class JsonResponse extends Facade
{
    public function allProductResponse($allProduct)
    {
        $products = new ProductResource($allProduct);
        return response($products, Response::HTTP_OK);
    }


    public function createdProduct()
    {
        return response('created', Response::HTTP_CREATED);
    }


    public function editResponse()
    {
    }

    public function sendCommentResponse()
    {
        return response('created', Response::HTTP_CREATED);
    }
    


    public function productResponse($product)
    {
        return response($product, Response::HTTP_OK);
    }
}
