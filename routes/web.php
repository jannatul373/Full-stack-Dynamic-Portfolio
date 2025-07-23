<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Dashboardcontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/login',[AuthenticationController::class,'login'])->name('login');
Route::post('/register',[AuthenticationController::class,'register'])->name('register');
//admin
Route::middleware(['auth'])->group(function(){
Route::get('/admin/dashboard',[Dashboardcontroller::class,'index'])->name('dashboard');

});
Route::get('/lp1', function () {
    return view('lp1');
});

Route::view('/', 'home');
Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/projects', 'projects');

Route::view('/contacts', 'contacts');