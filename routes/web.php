<?php

use Illuminate\Support\Facades\Auth;
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
})->middleware('auth');

Route::get('/about', function () {
    return view('about.about');
})->middleware('auth');

Route::get('/friends', function () {
    return view('friends.friend_card');
})->middleware('auth');

Route::get('/profile', function () {
    return view('profile.profile');
})->middleware('auth');

Route::get('/signin', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('signin&up.signin');
    }
});

Route::get('/signup', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('signin&up.signup');
    }
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
