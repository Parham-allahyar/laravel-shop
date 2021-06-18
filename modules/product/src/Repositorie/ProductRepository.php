<?php

namespace Product\Repositorie;

use Product\Database\Models\Product;
use Illuminate\Support\Facades\Auth;
use Category\Database\Models\Category;


class ProductRepository
{
  public function getProductById($id)
  {
    $product =  Product::where('id', $id)->with(['comments' => function ($query) {
      $query->with('childs')->where('parent_id', 0);
    }])->get();

    return $product;
  }

  public function getAllProduct()
  {
    return Product::all();
  }


  public function SellerCanCreateProduct($quantity, $name, $price, $description, $category_id)
  {
    //TODO:Refactor -> category Trait
    $category = Category::find($category_id);
    $product = auth('seller')->user()->creats()
      ->make(['name' => $name, 'price' => $price, 'quantity' => $quantity, 'description' => $description])
      ->categoryable()->associate($category)->save();
  }

  public function AdminCanCreateProduct($quantity, $name, $price, $description, $category_id)
  {
    //TODO:Refactor -> category Trait
    $category = Category::find($category_id);
    $product = auth('admin')->user()->creats()
      ->make(['name' => $name, 'price' => $price, 'quantity' => $quantity, 'description' => $description])
      ->categoryable()->associate($category)->save();
  }

  public function edit()
  {
  }

  public function update()
  {
  }

  public function destroy($id)
  {
    return $this->getProductById($id)->delete();
  }


  //Comment Methods

  public function sendComment($guard, $id, $comment, $parent_id,)
  {
    $user = Auth::guard($guard)->user();
    $product = Product::find($id);

    $product->comments()->make(['comment' => $comment, 'parent_id' => $parent_id])
      ->creatable()->associate($user)
      ->save();
  }

  public function userCanSendComment($id, $comment, $parent_id)
  {
    $this->sendComment('user', $id, $comment, $parent_id);
  }


  public function sellerCanSendComment($id, $comment, $parent_id)
  {
    $this->sendComment('seller', $id, $comment, $parent_id);
  }


  public function adminCanSendComment($id, $comment, $parent_id)
  {
    $this->sendComment('admin', $id, $comment, $parent_id);
  }
}
