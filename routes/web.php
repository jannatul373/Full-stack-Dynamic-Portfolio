<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lp1', function () {
    return view('lp1');
});

Route::view('/', 'home');
Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/projects', 'projects');

Route::view('/contacts', 'contacts');