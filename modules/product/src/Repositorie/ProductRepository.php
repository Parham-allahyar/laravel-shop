<?php

namespace Product\Repositorie;

use Product\Database\Models\Product;
use Illuminate\Support\Facades\Auth;
use Category\Database\Models\Category;
use Product\Database\Models\Attribute;
use Seller\Database\Models\Seller;
use Illuminate\Http\Request;

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

  protected function attachAttributesToProduct($product)
  {

    //$attributes = collect($validData['attributes']);
    $attributes = collect(['ram' => "8gb", 'colore' => "red", 'HDD' => "200GB",'brand' => "apple"]);

    $attributes->each(function ($a,$b) {

      $attr = Attribute::firstOrCreate(
        ['name' => $b]
      );

      $attr_value = $attr->values()->firstOrCreate(
        ['value' => $a]
      );
    });
  }
  public function SellerCanCreateProduct(Request $request)
  {


    $validData = $request->validate([
      'name' => 'required',
      'description' => 'required',
      'price' => 'required',
      'attributes' => 'array'
    ]);
     dd($validData);
    $category = Category::find(1);
    // $user = Seller::find(1);
    $product = Seller::find(1)->productCreats()->make($validData)
      ->categoryable()->associate($category)->save();


    $this->attachAttributesToProduct($product);
    dd("km");
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
