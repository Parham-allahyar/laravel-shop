<?php

namespace Category\Http\Controllers;


use App\Http\Controllers\Controller;
use Category\Facade\categoryProviderFacade;
use Category\Facade\ResponderFacade;
use Category\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $allCategorys = categoryProviderFacade::getAllCategory();
        return ResponderFacade::allCategoryResponse($allCategorys);
    }

    public function store(CategoryRequest $request)
    {
       
       $categoryIsCreated = categoryProviderFacade::CreateCategory($request->name, $request->parent_id);
       return $categoryIsCreated ? ResponderFacade::CreatedResponse() : ResponderFacade::FaildResponse();
    }

    public function edit($id)
    {
        $categoryIsUpdated = categoryProviderFacade::getCategoryById($id);
        return $categoryIsUpdated ? ResponderFacade::EditResponse() : ResponderFacade::FaildResponse();
    }

    public function update(CategoryRequest $request , $id)
    {
        categoryProviderFacade::UpdateCategoryById($id, $request->name, $request->parent_id);
        return ResponderFacade::UpdateResponse();
    }

    public function destroy($id)
    {
        categoryProviderFacade::DeleteCategoryById($id);
        return ResponderFacade::DeletedResponse();
    }
}
