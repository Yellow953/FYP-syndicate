<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//Client Side AR
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus']);
Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus']);
Route::get('/members', [App\Http\Controllers\HomeController::class, 'members']);
Route::get('/appliances', [App\Http\Controllers\HomeController::class, 'appliances']);

//Client Side EN
Route::get('/en/home', [App\Http\Controllers\ENController::class, 'index']);
Route::get('/en/aboutus', [App\Http\Controllers\ENController::class, 'aboutus']);
Route::get('/en/contactus', [App\Http\Controllers\ENController::class, 'contactus']);
Route::get('/en/members', [App\Http\Controllers\ENController::class, 'members']);
Route::get('/en/appliances', [App\Http\Controllers\ENController::class, 'appliances']);

//Admin Side
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin']);
