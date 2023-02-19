<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
Route::post('/profile_picture', [App\Http\Controllers\HomeController::class, 'profile_picture'])->middleware('auth');


Route::middleware(['auth','verified_email'])->group(function(){
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
});