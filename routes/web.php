<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoosterController;
use App\Http\Controllers\PCRController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar-booster', [BoosterController::class, 'show']);
Route::get('/daftar-pcr', [PCRController::class, 'show']);
Route::resource('/pedulin', 'App\Http\Controllers\PedulinController');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');



Route::get('/profile', function () {
    return view('profile');
});

Route::get('/forget', function () {
    return view('forget');

});