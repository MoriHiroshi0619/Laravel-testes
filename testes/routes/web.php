<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use \App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function (){
    return view('home');
})->middleware('auth')->name('home');

Route::get('login',[LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('register',[UserController::class, 'create'])->name('register');
Route::post('register',[UserController::class, 'store'])->name('register/**/');

Route::resource('/customers', 'CustomerController')->middleware('auth');




