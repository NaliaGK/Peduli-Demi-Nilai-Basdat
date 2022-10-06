<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoosterController;
use App\Http\Controllers\PCRController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/daftar-booster', [BoosterController::class, 'show']);
Route::get('/daftar-pcr', [PCRController::class, 'show']);

 
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