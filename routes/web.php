<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
})->name('home');


Route::get('/register',function(){
    return view('auth.register'); 
})->name('register');


Route::post('/register',[AuthController::class,'register'])->name('register');

Route::view('/login','auth.login')->name('login');

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
