<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PersonalInfoController;

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
// Skills
Route::get('/admin/skills', [SkillController::class, 'index'])->name('admin.skills');
Route::post('/admin/skills', [SkillController::class, 'store'])->name('admin.skills.store');
//projects
Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects');
Route::post('/admin/projects', [ProjectController::class, 'store'])->name('admin.projects.store');

// Personal Info
Route::get('/admin/personalinfo', [PersonalInfoController::class, 'index'])->name('admin.personalinfo');
Route::post('/admin/personalinfo', [PersonalInfoController::class, 'store'])->name('admin.personalinfo.store');


});
Route::get('/lp1', function () {
    return view('lp1');
});
Route::get('/resume', function () {
    return view('resume'); // resume.blade.php
});

Route::get('/admin/overview', function () {
    return view('admin.overview');
})->name('admin.overview');

// Dashboard


// Users (just a placeholder for now)
Route::get('/admin/users', function () {
    return view('admin.users');
})->name('admin.users');

// Projects (placeholder)
Route::get('/admin/projects', function () {
    return view('admin.projects');
})->name('admin.projects');


// Personal Info (placeholder)
Route::get('/admin/personalinfo', function () {
    return view('admin.personalinfo');
})->name('admin.personalinfo');

// Logout (placeholder)
Route::get('/admin/logout', function () {
    // Add logout logic here later
})->name('admin.logout');

Route::get('/home', function () {
    return view('welcome');
})->name('welcome');

Route::view('/', 'home');
Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/projects', 'projects');
Route::view('/skill', 'skill');


Route::view('/contacts', 'contacts');