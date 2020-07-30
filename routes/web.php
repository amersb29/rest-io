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
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userVerified', function () {
    return view('userVerified');
});
Route::get('/passwordReset', function () {
    return view('passwordReset');
});

Auth::routes(['verify' => true]);
// Auth::routes();
