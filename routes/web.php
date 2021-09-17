<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\User;

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

Route::group(['middleware' => 'prevent-back-history'], function () {

    Route::get('/signup', function () {
        return view('signin&up.signup');
    })->middleware('guest');

    Route::get('/signin', function () {
        return view('signin&up.signin');
    })->middleware('guest');

    Route::get('/home', function () {
        return view('home');
    })->middleware('auth');

    Route::get('/profile', function () {
        return view('profile.profile');
    })->middleware('auth');

    Route::get('/about', function () {
        return view('about.about');
    })->middleware('auth');


    Auth::routes();

    Route::get('/people', 'UserController@index');
    Route::get('/users', 'UserController@edit');
    Route::put('/users/{id}', 'UserController@update');
    Route::get('users/{id}', 'UserController@show');
    Route::get('user_posts/{user_id}', 'UserController@show');
    Route::get('/user_about/{user_id}', function ($id) {
        $user = User::find($id);
        return view('user.show_user_about', [
            'user' => $user,
        ]);
    })->middleware('auth');
    Route::get('/user_friends/{user_id}', function ($id) {
        $user = User::find($id);
        return view('user.show_user_friends', [
            'user' => $user,
        ]);
    })->middleware('auth');


    Route::get('/friends', 'FriendController@show_friends');
    Route::get('/requests', 'FriendController@show_friend_requests');
    Route::get('/sent_to/{id}', 'FriendController@sent_friend_request');
    Route::get('/accept/{id}', 'FriendController@accept_friend_request');
    Route::get('/deny/{id}', 'FriendController@deny_friend_request');
    Route::get('/unfriend/{id}', 'FriendController@unfriend');
});


//Route::get('/home', 'HomeController@index')->name('home');
