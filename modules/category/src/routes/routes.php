<?php


use Illuminate\Support\Facades\Route;
use Category\Http\Controllers\CategoryController;
use Category\Facade\categoryProviderFacade;

Route::POST('/category/create', [CategoryController::class, 'store']);
Route::GET('/categorys', [CategoryController::class, 'index']);
Route::GET('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::PUT('/category/update/{id}', [CategoryController::class, 'update']);
Route::DELETE('/category/delete/{id}', [CategoryController::class, 'destroy']);

Route::get('/testh', function () {
    
 categoryProviderFacade::someMethod1();

});