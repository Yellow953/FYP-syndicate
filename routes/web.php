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
Route::get('/en/admin/slideshow', [App\Http\Controllers\AdminController::class, 'slideshow']);
Route::get('/en/admin/board', [App\Http\Controllers\AdminController::class, 'board']);
Route::get('/en/admin/projects', [App\Http\Controllers\AdminController::class, 'projects']);

//user
Route::get('/admin/user/{id}/delete', [App\Http\Controllers\UserController::class, 'DeleteUser']);
Route::get('/admin/user/{id}/edit', [App\Http\Controllers\UserController::class, 'EditUser']);
Route::post('/admin/user/{id}/save', [App\Http\Controllers\UserController::class, 'SaveUser']);
Route::get('/admin/user/new', [App\Http\Controllers\UserController::class, 'NewUser']);
Route::post('/admin/user/save', [App\Http\Controllers\UserController::class, 'SaveNewUser']);

//news
Route::get('/admin/news/{id}/delete', [App\Http\Controllers\NewsController::class, 'DeleteNews']);
Route::get('/admin/news/{id}/edit', [App\Http\Controllers\NewsController::class, 'EditNews']);
Route::post('/admin/news/{id}/save', [App\Http\Controllers\NewsController::class, 'SaveNews']);
Route::get('/admin/news/new', [App\Http\Controllers\NewsController::class, 'NewNews']);
Route::post('/admin/news/save', [App\Http\Controllers\NewsController::class, 'SaveNewNews']);

//questions
Route::post('/admin/questions/new', [App\Http\Controllers\HomeController::class, 'NewQuestion']);
Route::get('/admin/questions/{id}/reply', [App\Http\Controllers\QuestionsController::class, 'ReplyQuestion']);
Route::get('/admin/questions/{id}/send', [App\Http\Controllers\QuestionsController::class, 'SendQuestion']);
Route::get('/admin/questions/{id}/delete', [App\Http\Controllers\QuestionsController::class, 'DeleteQuestion']);
Route::get('/admin/questions/{id}/addtofavorite', [App\Http\Controllers\QuestionsController::class, 'AddToFavorite']);

//insurances
Route::get('/admin/insurances/{id}/delete', [App\Http\Controllers\InsurancesController::class, 'DeleteInsurance']);
Route::get('/admin/insurances/{id}/extend', [App\Http\Controllers\InsurancesController::class, 'ExtendInsurance']);

//applications
Route::get('/admin/insuranceApplication/{id}/accept', [App\Http\Controllers\ApplicationsController::class, 'AcceptInsurance']);
Route::get('/admin/insuranceApplication/{id}/reject', [App\Http\Controllers\ApplicationsController::class, 'RejectInsurance']);
Route::get('/admin/memberApplication/{id}/accept', [App\Http\Controllers\ApplicationsController::class, 'AcceptMember']);
Route::get('/admin/memberApplication/{id}/reject', [App\Http\Controllers\ApplicationsController::class, 'RejectMember']);

//Board
Route::get('/admin/board/{id}/delete', [App\Http\Controllers\BoardController::class, 'DeleteBoard']);
Route::get('/admin/board/{id}/edit', [App\Http\Controllers\BoardController::class, 'EditBoard']);
Route::post('/admin/board/{id}/save', [App\Http\Controllers\BoardController::class, 'SaveBoard']);
Route::get('/admin/board/new', [App\Http\Controllers\BoardController::class, 'NewBoard']);
Route::post('/admin/board/save', [App\Http\Controllers\BoardController::class, 'SaveNewBoard']);

//projects
Route::get('/admin/projects/{id}/delete', [App\Http\Controllers\ProjectController::class, 'DeleteProject']);
Route::get('/admin/projects/{id}/edit', [App\Http\Controllers\ProjectController::class, 'EditProject']);
Route::post('/admin/projects/{id}/save', [App\Http\Controllers\ProjectController::class, 'SaveProjct']);
Route::get('/admin/projects/new', [App\Http\Controllers\ProjectController::class, 'NewProject']);
Route::post('/admin/projects/save', [App\Http\Controllers\ProjectController::class, 'SaveNewProject']);