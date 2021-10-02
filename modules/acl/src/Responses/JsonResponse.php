<?php

namespace Acl\Responses;

use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Response;
use Acl\Http\Resources\RoleResource;
use Acl\Http\Resources\PermissionResource;

class JsonResponse extends Facade
{
    public function allRoleResponse($roles)
    {
        $allRoles =  new RoleResource($roles);
        return response($allRoles, Response::HTTP_OK);
    }


    public function allPermissionResponse($allPermission)
    {
        $allPermissions =  new PermissionResource($allPermission);
        return response($allPermissions, Response::HTTP_OK);
    }

    public function CreatedResponse()
    {
        return response('نقش با موفقیت اضافه شد',Response::HTTP_OK);
    }
}
