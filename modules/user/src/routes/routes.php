<?php

use User\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//User Login
Route::Post('login/user', [UserController::class, 'login']);
Route::Post('login/code', [UserController::class, 'auth']);
Route::GET('users', [UserController::class, 'index']);
//User Info
Route::GET('user/info/{id}', [UserController::class, 'userInfo']);
Route::POST('user/update', [UserController::class, 'update']);
Route::GET('user/comments', [UserController::class, 'userComments']);
Route::GET('user/orders', [UserController::class, 'userOrders']);