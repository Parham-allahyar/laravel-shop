<?php

namespace User\Responses;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use User\Http\Resources\UserResource;

class JsonResponse extends Facade
{

    public function updated($users)
    {
        $allUsers =  new UserResource($users);
        return response($allUsers, Response::HTTP_OK);
    }

    public function getAllUsers($users)
    {
        $allUsers =  new UserResource($users);
        return response($allUsers, Response::HTTP_OK);
    }

    public function userInfo($userInfo)
    {
    }
    public function login()
    {
        return response(Response::HTTP_OK);
    }

    public function auth($token)
    {
        return response($token, Response::HTTP_OK);
    }

    public function loginFail()
    {
        return response(Response::HTTP_UNAUTHORIZED);
    }
    
    public function responseUserOrders($orders)
    {
        return response($orders, Response::HTTP_OK);
    }
}
