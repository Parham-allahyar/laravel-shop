<?php

namespace Product\Http\Controllers;


use App\Http\Controllers\Controller;
use Product\Facade\ProductProviderFacade;
use Product\Facade\ResponderFacade;
use Product\Http\Request\ProductRequest;



class ProductController extends Controller
{
    public function index()
    {
        $allProducts = ProductProviderFacade::getAllProduct();
        return ResponderFacade::allProductResponse($allProducts);
    }

    public function product($id)

    {
        $product = ProductProviderFacade::getProductById($id);
        return ResponderFacade::productResponse($product);
    }

  
    //Create Produt
    public function createBySeller(ProductRequest $request)
    {
        
        ProductProviderFacade::SellerCanCreateProduct($request);
        return ResponderFacade::createdProduct();
    }

    public function createByAdmin(ProductRequest $request)
    {
        ProductProviderFacade::AdminCanCreateProduct($request->quantity, $request->name, $request->price, $request->description);
        return ResponderFacade::createdProduct();
    }

    //Update
    public function edit($id)
    {
        $category = productProviderFacade::getCategoryById($id);
        return ResponderFacade::EditResponse($category);
    }

    public function update(ProductRequest $request, $id)
    {
        productProviderFacade::UpdateCategoryById($id, $request->comment, $request->parent_id);
        return ResponderFacade::UpdateResponse();
    }

    //Delete
    public function destroy($id)
    {
        productProviderFacade::DeleteCategoryById($id);
        return ResponderFacade::DeletedResponse();
    }

    //Send Comment for Product
     public function userCanSendComment($id, ProductRequest $request)
    {
        productProviderFacade::userCanSendComment($id, $request->comment, $request->parent_id);
        return ResponderFacade::sendCommentResponse();
    }

    public function sellerCanSendComment($id)
    {
        productProviderFacade::sellerCanSendComment($id);
        return ResponderFacade::sendCommentResponse();
    }

    public function adminCanSendComment($id, ProductRequest $request)
    {
        productProviderFacade::adminCanSendComment($id, $request->comment, $request->parent_id);
        return ResponderFacade::sendCommentResponse();
    }
}



