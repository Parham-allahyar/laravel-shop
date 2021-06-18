<?php

use Acl\Http\Controllers\PermissionController;
use Acl\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;



//Permission Routes
Route::POST('/permission/create', [PermissionController::class, 'store']);
Route::GET('/permissions', [PermissionController::class, 'index']);
Route::GET('/permission/edit/{id}', [PermissionController::class, 'edit']);
Route::PUT('/permission/update/{id}', [PermissionController::class, 'update']);
Route::DELETE('/permission/delete/{id}', [PermissionController::class, 'destroy']);
Route::POST('/see', [PermissionController::class, 'see']);
Route::POST('/seee', [PermissionController::class, 'seee']);
//Role Routes
Route::POST('/role/create', [RoleController::class, 'store']);
Route::GET('/roles', [RoleController::class, 'index']);
Route::GET('/role/edit/{id}', [RoleController::class, 'edit']);
Route::PUT('/role/update/{id}', [RoleController::class, 'update']);
Route::DELETE('/role/delete/{id}', [RoleController::class, 'destroy']);