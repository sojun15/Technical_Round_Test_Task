<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// i define the home route as a login page 
Route::get('/', function () {
    return view('login');
})->name('login');

// this route is used for checking form login data validation 
Route::post('/login',[UserController::class,'LoginUser']);

// this route is used for opening the sign up page
Route::get('/signup', function () {
    return view('Signup');
})->name('signup');

// this route is used for checking form Signup page, data validation and save database 
Route::post('/signup',[UserController::class,'SignUp'])->name('signup');

// this route is used for checking form store_url page, data validation and save database 
Route::post('/store_url',[UserController::class,'StoreUrl'])->name('storeUrl');

// this route is used for opening the store_url page
Route::get('/shorter',function(){
    return view('store_url');
})->name('shorter');

// this route is used for opening the dashboard page
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');