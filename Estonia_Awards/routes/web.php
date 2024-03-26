<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;

use App\Models\Category;
use App\Models\Task;

Route::get('/', function () {
    return view('dashboard');
});

Route::get ('/dashboard', [Controller::class, 'dashboard']);

Route::get ('/categorylist', [CategoryController::class, 'index']);
Route::get ('/addcategory', [CategoryController::class, 'create']);
Route::post ('/addcategory', [CategoryController::class, 'store']);

Route::get ('/editcategory/{category}', [CategoryController::class, 'edit']);
Route::post ('/editcategory/{category}', [CategoryController::class, 'update']);

Route::delete ('/deletecategory/{category}', [CategoryController::class, 'destroy']);

Route::get('/productlist', [TaskController::class,'index']);

Route::post('productBycategory', [TaskController::class,'taskByCategory']);

Route::get('/addtask', [TaskController::class,'create']);
Route::post('/addtask', [TaskController::class,'store']);

Route::get('/edittask/{task}', [TaskController::class, 'edit']);
Route::post('/edittask/{task}', [TaskController::class, 'update']);

Route::get('/deletetask/{task}', [TaskController::class, 'destroy']);