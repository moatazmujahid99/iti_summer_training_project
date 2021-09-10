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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//don't copy it if you are already implemented it to avoid any conflict
Route::get('/users', 'UserController@index');
Route::get('/users/{id}', 'UserController@show');
//-----------------------------------


// must be copied----------------------
Route::get('/friends', 'FriendController@show_friends');

Route::get('/requests', 'FriendController@show_friend_requests');

Route::get('/sent_to/{id}', 'FriendController@sent_friend_request');

Route::get('/accept/{id}', 'FriendController@accept_friend_request');

Route::get('/deny/{id}', 'FriendController@deny_friend_request');

Route::get('/unfriend/{id}', 'FriendController@unfriend');
//------------------------------------------------
