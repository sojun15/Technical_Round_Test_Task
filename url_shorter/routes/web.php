<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Signup');
});

Route::post('/signup',[UserController::class,'SignUp'])->name('signup');
Route::post('/store_url',[UserController::class,'StoreUrl'])->name('storeUrl');
Route::get('/shorter',function(){
    return view('store_url');
})->name('shorter');

Route::post('/login',[UserController::class,'LoginUser']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');