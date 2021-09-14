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

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about.about');
});
Route::get('/friends', function () {
    return view('friends.friend_card');
});
Route::get('/profile', function () {
    return view('profile.profile');
});
Route::get('/signin', function () {
    return view('signin&up.signin');
});
Route::get('/signup', function () {
    return view('signin&up.signup');
});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
