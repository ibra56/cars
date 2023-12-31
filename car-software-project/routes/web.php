<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route for handling the sign in form submission
Route::get('/login',function(){
    return view('signin');
})->name('signin');

// Route for handling the sign up form submission
Route::get('/signup',function(){
    return view('signup');
})->name('signup');


// Route for handlling Admin main
Route::view('dashboard','admin.adminmain');



