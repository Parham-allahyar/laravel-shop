<?php

use User\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//User Login
Route::Post('login/user', [UserController::class, 'login']);
Route::Post('login/code', [UserController::class, 'auth']);
Route::GET('users', [UserController::class, 'index']);

//Error
Route::GET('user/info/{id}', [UserController::class, 'userInfo']);

Route::POST('user/update', [UserController::class, 'update']);