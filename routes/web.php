<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/we', function () {
    return view('welcome');
});

Route::get('/signup',[RegisterController::class,'signUp'])->name('signup')->middleware('auth','isadmin');
Route::post('/ceateaccount',[RegisterController::class,'createAccount'])->name('createAccount');
Route::get('/',[RegisterController::class,'login'])->name('login');
Route::post('/loging',[RegisterController::class,'loging'])->name('loging');
Route::get('/logout',[RegisterController::class,'logout'])->name('logout');
Route::get('/test', function () {
    Session::increment('views');
    return "Views: " . Session::get('views');
});

Route::get('/dashboard',[RegisterController::class,'dashboard'])->name('dashboard');
Route::middleware(['auth', 'isadmin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'addprodct']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
});
Route::middleware(['auth', 'ismanager'])->group(function () {
    Route::get('/manger', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin', [AdminController::class, 'index']);
});
Route::get('/manager', [AdminController::class, 'mgaddprodct']);
