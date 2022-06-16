<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//Client Side
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

//Admin Side
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin']);
