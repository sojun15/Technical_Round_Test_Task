<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Signup');
});

Route::post('/signup',[UserController::class,'SignUp'])->name('signup');

Route::post('/login',[UserController::class,'LoginUser']);

Route::get('/login', function () {
    return view('login');
})->name('login');

