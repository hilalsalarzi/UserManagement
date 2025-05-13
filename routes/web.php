<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup',[RegisterController::class,'signUp'])->name('signup');
Route::get('/dashboard',[RegisterController::class,'dashboard']);
Route::post('/ceateaccount',[RegisterController::class,'createAccount'])->name('createAccount');
