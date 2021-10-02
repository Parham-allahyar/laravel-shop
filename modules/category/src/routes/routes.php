<?php

use Illuminate\Support\Facades\Route;
use Category\Http\Controllers\CategoryController;


Route::POST('/category/create', [CategoryController::class, 'store']);
Route::GET('/categorys', [CategoryController::class, 'index']);
Route::GET('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::PUT('/category/update/{id}', [CategoryController::class, 'update']);
Route::DELETE('/category/delete/{id}', [CategoryController::class, 'destroy']);


Route::GET('/categorys/parent', [CategoryController::class, 'parentCategorys']);
Route::GET('/categorys/{id}/child', [CategoryController::class, 'childCategorys']);

Route::GET('/category/{id}/product', [CategoryController::class, 'productsCategory']);
