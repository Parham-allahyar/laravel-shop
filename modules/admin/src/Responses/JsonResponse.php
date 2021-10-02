<?php

namespace Admin\Responses;

use Illuminate\Support\Facades\Facade;
use Admin\Http\Resources\AdminResource;
use Illuminate\Http\Response;
class JsonResponse extends Facade
{
   public function getAllAdmins($allAdmin)
   {
    $allAdmin =  new AdminResource($allAdmin);
    return response($allAdmin, Response::HTTP_OK); 
   }
}