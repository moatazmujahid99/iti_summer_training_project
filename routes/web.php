<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

Route::get('/signup', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('signin&up.signup');
    }
});

Route::get('/signin', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('signin&up.signin');
    }
});

Route::get('/home', function () {

    $posts = Auth::user()->posts;
    $friends = Auth::user()->getFriends();

    foreach ($friends as $friend)
        $posts = $posts->concat($friend->posts);

    $posts = $posts->sortBy('created_at');

    return view('home', ['posts' => $posts]);
})->middleware('auth');

// Route::get('/profile', function () {
//     return view('profile.profile',  ['posts' => Auth::user()->posts]);
// })->middleware('auth');




Auth::routes();

Route::get('/users/{id}/people', 'UserController@index');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::put('/users/{id}', 'UserController@update');

//Route::get('users/{id}', 'UserController@show');
//Route::get('user_posts/{user_id}', 'UserController@show');
Route::get('users/{id}/profile', 'UserController@show')->middleware('auth');


Route::get('/users/{id}/about', 'UserController@show')->middleware('auth');
// Route::get('/about', function () {
//     return view('about.about', ['user' => Auth::user()]);
// })->middleware('auth');
// Route::get('/user_about/{user_id}', function ($id) {
//     $user = User::find($id);
//     return view('user.show_user_about', [
//         'user' => $user,
//     ]);
// });

Route::get('/users/{id}/friends', 'FriendController@show_friends');
// Route::get('/user_friends/{user_id}', function ($id) {
//     $user = User::find($id);
//     return view('user.show_user_friends', [
//         'user' => $user,
//     ]);
// });
//Route::get('/friends', 'FriendController@show_friends');


Route::get('/users/{id}/requests', 'FriendController@show_friend_requests');
// Route::get('/requests', 'FriendController@show_friend_requests');

Route::get('/sent_to/{id}', 'FriendController@sent_friend_request');
Route::get('/accept/{id}', 'FriendController@accept_friend_request');
Route::get('/deny/{id}', 'FriendController@deny_friend_request');
Route::get('/unfriend/{id}', 'FriendController@unfriend');



Route::resource('posts', 'PostController');
Route::post('/posts/{id}/comments', [CommentController::class, 'addComment']);
//Route::get('/home', 'HomeController@index')->name('home');
