<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

//Client Side AR
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/aboutus', [App\Http\Controllers\HomeController::class, 'aboutus']);
Route::get('/contactus', [App\Http\Controllers\HomeController::class, 'contactus']);
Route::get('/members', [App\Http\Controllers\HomeController::class, 'members']);
Route::get('/applications', [App\Http\Controllers\HomeController::class, 'applications']);

Route::post('/contactussubmit', [App\Http\Controllers\HomeController::class, 'contactussubmit']);

//Client Side EN
Route::get('/en/home', [App\Http\Controllers\ENController::class, 'index']);
Route::get('/en/aboutus', [App\Http\Controllers\ENController::class, 'aboutus']);
Route::get('/en/contactus', [App\Http\Controllers\ENController::class, 'contactus']);
Route::get('/en/members', [App\Http\Controllers\ENController::class, 'members']);
Route::get('/en/applications', [App\Http\Controllers\ENController::class, 'applications']);

//Admin Side
Route::get('/en/admin', [App\Http\Controllers\AdminController::class, 'admin']);
Route::get('/en/admin/users', [App\Http\Controllers\AdminController::class, 'users']);
Route::get('/en/admin/news', [App\Http\Controllers\AdminController::class, 'news']);
Route::get('/en/admin/memberApplications', [App\Http\Controllers\AdminController::class, 'memberApplications']);
Route::get('/en/admin/insuranceApplications', [App\Http\Controllers\AdminController::class, 'insuranceApplications']);
Route::get('/en/admin/insurances', [App\Http\Controllers\AdminController::class, 'insurances']);
Route::get('/en/admin/userQuestions', [App\Http\Controllers\AdminController::class, 'userQuestions']);
