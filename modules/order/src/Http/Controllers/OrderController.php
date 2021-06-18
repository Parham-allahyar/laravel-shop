<?php

namespace Order\Http\Controllers;


use App\Http\Controllers\Controller;

use Order\orderCanStore\AuthenticatedUser;
use Order\orderCanStore\ProductIsAvailable;
use Order\orderCanStore\UserHaveAddress;
use Order\orderCanStore\PaymentIssuccessful;
use Order\Facade\OrderProviderFacade;
use Illuminate\Support\Facades\App;

class OrderController extends Controller
{

   public function index()
   {
      return  $this->getCategorieById(1);
   }

   public function store()
   {

      $productArray = [];
      $productsId = [1, 2, 3];
      // foreach ($productsId as $productId) {
      //    $product = $this->getUserById($productId);
      //    array_push($productArray, $product);
      // }

       $products = collect($productArray);

      $AuthenticatedUser   = App::make(AuthenticatedUser::class);
      $UserHaveAddress     = App::make(UserHaveAddress::class);
      $ProductIsAvailable  = App::make(ProductIsAvailable::class);
      $PaymentIssuccessful = App::make(PaymentIssuccessful::class);

      $AuthenticatedUser->setNext($UserHaveAddress);
      $UserHaveAddress->setNext($ProductIsAvailable);
      $ProductIsAvailable->setNext($PaymentIssuccessful);
      $AuthenticatedUser->handle($products);
      $productsId = [1, 2, 3];
      OrderProviderFacade::storeOrder($productsId, 200);
   }


   public function orders()
   {
      $orders = OrderProviderFacade::getAllOrder();
   }


   public function userOrder()
   {
      $order = OrderProviderFacade::getAllOrder();
   }
}
