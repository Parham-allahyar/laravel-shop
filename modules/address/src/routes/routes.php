<?php


use Illuminate\Support\Facades\Route;
use Address\Http\Controllers\AddressController;


Route::GET('/addresss', [AddressController::class, 'index']);
Route::POST('/address/create', [AddressController::class, 'store']);
Route::GET('/user/address', [AddressController::class, 'userAddress']);
Route::GET('/address/edit/{id}', [AddressController::class, 'edit']);
Route::PUT('/address/update/{id}', [AddressController::class, 'update']);
Route::DELETE('/address/delete/{id}', [AddressController::class, 'destroy']);