<?php


use Illuminate\Support\Facades\Route;
use Product\Http\Controllers\ProductController;


//Get Product
Route::GET('/products', [ProductController::class, 'index']);
Route::GET('/product/{id}', [ProductController::class, 'product']);

//Create Product
Route::POST('/seller/product', [ProductController::class, 'createBySeller']);
Route::POST('/admin/product', [ProductController::class, 'createByAdmin']);

//Send Comment for Product
Route::POST('/admin/comment', [ProductController::class, 'adminCanSendComment']);
Route::POST('/seller/comment', [ProductController::class, 'sellerCanSendComment']);
Route::POST('/user/comment', [ProductController::class, ' userCanSendComment']);


//Delete Product
Route::DELETE('/product/delete/{id}', [ProductController::class, 'destroy']);


