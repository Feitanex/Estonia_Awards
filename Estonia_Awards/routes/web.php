<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActivationController;

use App\Models\Activation;
use App\Models\Category;
use App\Models\Task;
use App\Models\User;





Route::get('/', [TaskController::class, 'listLimit' ]);

Route::get('/show/{task}', [TaskController::class,'show']);

Route::get('/diplom', [TaskController::class, 'diplom']);
Route::get('/info', [TaskController::class, 'info']);

Route::get('/activation', [ActivationController::class, 'activation']);
Route::get('/activations', [ActivationController::class, 'index']);
Route::get('/activations', [ActivationController::class, 'activation']);

Route::get('/news', [TaskController::class, 'listmenu'])->name('news.list');
Route::post('newsBycategory', [TaskController::class, 'newsByCategory'])->name('news.filter');

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/search/', [CategoryController::class, 'search']);
Route::get('/catalog/{search}', [CategoryController::class, 'catalog']);
Route::get('/zakaz', [TaskController::class, 'zakaz']);

// Route::get('/', function () {
//     return view('startMainPage');
// });
Route::group(['middleware'=>['auth']],function(){

Route::get ('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/portfolio', [TaskController::class, 'portfolio'])->name('portfolio');


Route::middleware('manager')->group(function () {

        Route::get ('/categorylist', [CategoryController::class, 'index']);
        Route::get ('/addcategory', [CategoryController::class, 'create']);
        Route::post ('/addcategory', [CategoryController::class, 'store']);

        Route::get ('/editcategory/{category}', [CategoryController::class, 'edit']);
        Route::post ('/editcategory/{category}', [CategoryController::class, 'update']);

        Route::delete ('/deletecategory/{category}', [CategoryController::class, 'destroy']);

        Route::get ('/activationlist', [ActivationController::class, 'index']);
        Route::get ('/addactivation', [ActivationController::class, 'create']);
        Route::post ('/addactivation', [ActivationController::class, 'store'])->name('addactivation');

        Route::get ('/editactivation/{activation}', [ActivationController::class, 'edit']);
        Route::post ('/editactivation/{activation}', [ActivationController::class, 'update']);

        Route::delete ('/deleteactivation/{activation}', [ActivationController::class, 'destroy']);








        Route::get('/productlist', [TaskController::class,'index']);

        Route::post('productBycategory', [TaskController::class,'taskByCategory']);

        Route::get('/addtask', [TaskController::class,'create']);
        Route::post('/addtask', [TaskController::class,'store']);

        Route::get('/edittask/{task}', [TaskController::class, 'edit']);
        Route::post('/edittask/{task}', [TaskController::class, 'update']);

        Route::get('/deletetask/{task}', [TaskController::class, 'destroy']);
});

Route::middleware('admin')->group(function () {
        Route::get('/users', [UserController::class, 'index'])->name('admin');
        Route::post('/userByrole', [UserController::class, 'userByrole']);
        Route::get('/adduser', [UserController::class, 'create'])->name('adduser.create');
        Route::post('/adduser', [UserController::class, 'store'])->name('adduser.store');

});
Route::get('/profile/{user}', [UserController::class,'edit']);


        Route::get('/edituser/{user}', [UserController::class, 'edit'])->name('edituser.edit');
        Route::put('/edituser/{user}', [UserController::class, 'update'])->name('edituser.update');
});

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticate']);
Route::get('/logout', [AuthController::class,'logout'])->name('logout');