<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Signup');
});

Route::post('/signup',[UserController::class,'SignUp'])->name('signup');
