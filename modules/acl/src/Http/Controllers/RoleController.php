<?php

namespace Acl\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Acl\Facade\ResponderFacade;
use Acl\Facade\roleProviderFacade;

class RoleController extends Controller
{

    public function index()
    {
        $allCategorys = roleProviderFacade::getAllCategory();
        return ResponderFacade::allRoleResponse($allCategorys);
    }

    public function store(Request $request)
    {

        roleProviderFacade::CreateRole($request->name, $request->parent_id);
        return ResponderFacade::CreatedResponse();
    }

    public function edit($id)
    {
        $category = roleProviderFacade::getRoleById($id);
        return ResponderFacade::EditResponse($category);
    }

    public function update(Request $request, $id)
    {
        roleProviderFacade::UpdateRoleById($id, $request->name, $request->parent_id);
        return ResponderFacade::UpdateResponse();
    }

    public function destroy($id)
    {
        roleProviderFacade::DeleteRoleById($id);
        return ResponderFacade::DeletedResponse();
    }
}
