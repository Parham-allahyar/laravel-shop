<?php

namespace Category\Responses;

use Category\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Response;

class JsonResponse extends Facade
{
    public function allCategoryResponse($allcategory)
    {
        $allcar =  new CategoryResource($allcategory);
        return response($allcar, Response::HTTP_OK);
    }

    public function FaildResponse()
    {
        return response(Response::HTTP_BAD_REQUEST);
    }

    public function CreatedResponse()
    {
        return response('Done', Response::HTTP_CREATED);
    }
    public function DeletedResponse()
    {
        return response('Done', Response::HTTP_OK);
    }

    public function EditResponse()
    {
        return response('Done', Response::HTTP_OK);
    }
    public function UpdateResponse()
    {
        return response('Done', Response::HTTP_OK);
    }
}
