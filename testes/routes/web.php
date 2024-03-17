<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use \App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function (){
    return view('home');
})->name('home');

Route::get('login',[LoginController::class, 'index'])->name('login');
Route::get('register',[UserController::class, 'create'])->name('register.get');
Route::post('register',[UserController::class, 'store'])->name('register.post');

Route::resource('/customers', 'CustomerController')->middleware('auth');




