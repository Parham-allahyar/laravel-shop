<?php

use Order\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Order\Database\Models\Order;
use Product\Database\Models\Product;

//User Login
// Route::Post('login/user', [OrderController::class, 'login']);
Route::GET('dfs', [OrderController::class, 'index']);
Route::GET('/order/store', [OrderController::class, 'store']);
// Route::GET('users', [UserController::class, 'index']);
// Route::Ghandle
Route::get('/order', function () {
   
    $a = Product::find(1);
    $a = [Product::find(1) , Product::find(2)] ;
   
    return $a ;
   
    Order::create()->productable($a);

    return Order::all();
});
