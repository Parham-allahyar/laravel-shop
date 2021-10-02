<?php

use Seller\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

//Seller Login
Route::Post('login/seller', [SellerController::class, 'sellerlogin']);
Route::Post('register/seller', [SellerController::class, 'register']);
Route::GET('sellers', [SellerController::class, 'sellers']);
// Route::GET('seller/{id}', [SellerController::class, 'seller']);
//Seller Products
Route::GET('seller/{id}/products', [SellerController::class, 'sellerProducts']);
//Seller Info
Route::GET('seller/info/{id}', [SellerController::class, 'sellerInfo']);