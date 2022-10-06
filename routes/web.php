<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoosterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar-booster', [BoosterController::class, 'show']);

 
Route::resource('/pedulin', 'App\Http\Controllers\PedulinController');

Route::resource('/faskes', 'App\Http\Controllers\FaskesController');

Route::resource('/meds', 'App\Http\Controllers\ObatController');

Route::resource('/pcr', 'App\Http\Controllers\PCRController');

Route::resource('/booster', 'App\Http\Controllers\BoosterController');

Route::get('/register', function () {
    return view('register');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/forget', function () {
    return view('forget');
});