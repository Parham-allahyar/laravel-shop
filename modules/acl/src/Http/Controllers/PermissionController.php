<?php

namespace Acl\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Acl\Facade\ResponderFacade;
use Acl\Facade\permissionProviderFacade;

class PermissionController extends Controller
{

    public function index()
    {
        $allCategorys = permissionProviderFacade::getAllCategory();
        return ResponderFacade::allPermissionResponse($allCategorys);
    }

    public function store(Request $request)
    {

        permissionProviderFacade::CreatePermission($request->name, $request->parent_id);
        return ResponderFacade::CreatedResponse();
    }

    public function edit($id)
    {
        $category = permissionProviderFacade::getPermissionById($id);
        return ResponderFacade::EditResponse($category);
    }

    public function update(Request $request, $id)
    {
        permissionProviderFacade::UpdatePermissionById($id, $request->name, $request->parent_id);
        return ResponderFacade::UpdateResponse();
    }

    public function destroy($id)
    {
        permissionProviderFacade::DeletePermissionById($id);
        return ResponderFacade::DeletedResponse();
    }
}
