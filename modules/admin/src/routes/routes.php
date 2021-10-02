<?php

use Admin\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//Admin Login

Route::Post('login/admin', [AdminController::class, 'adminlogin']);
Route::Post('register/admin', [AdminController::class, 'register']);
Route::GET('admins', [AdminController::class, 'index']);
