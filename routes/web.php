<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/users', [UserController::class,"index"]);
Route::get('/users/create', [UserController::class,"create"]);
Route::post('/users', [UserController::class,"store"]);
Route::get('/users/{id}', [UserController::class,"show"]);
Route::get('/users/{id}/edit', [UserController::class,"edit"]);
Route::PUT('/users/{id}', [UserController::class,"update"]);
Route::DELETE('/users/{id}', [UserController::class,"destroy"]);