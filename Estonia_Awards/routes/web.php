<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Models\Country;
use App\Http\Controllers\CityController;
Use App\Models\City;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('start');
});

Route::get('/countries', [CountryController::class, 'index']);
Route::get('/detail/{country}', [CountryController::class, 'show']);
Route::get('/search/', [CountryController::class,'search'])->name('search');

Route::get('/cities', [CityController::class, 'index']);