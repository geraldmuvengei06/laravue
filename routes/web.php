<?php

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

// Auth::routes();

// Auth routes

Route::get('/user', "Auth\InitController@user")->name('user');
Route::get('/init', "Auth\InitController@init")->name('init');
Route::post('/login', "Auth\LoginController@loginUser")->name('login');
Route::post('/logout', "Auth\LoginController@logout")->name('logout');
Route::post('/password/email', "Auth\ForgotPasswordController@sendResetLinkEmail")->name('password.email');
Route::post('/password/reset', "Auth\ResetPasswordController@reset")->name('password.update');
Route::post('/register', "Auth\RegisterController@register")->name('register');       

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{path}', function () {
    return view('welcome');
})->where('path', '([A-z\d-\/_.]+)?' );

