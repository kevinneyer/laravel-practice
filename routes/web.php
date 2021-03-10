<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowController;
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

Route::get('/', 'App\Http\Controllers\LoginController@home');

Route::get('/movies', 'App\Http\Controllers\HomeController@index');

Route::get('/movies/{id}', 'App\Http\Controllers\ShowController@show');

Route::get('/my/favorites', 'App\Http\Controllers\FavoriteController@index');

Route::get('/test/testing', 'App\Http\Controllers\UserController@index');

// Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
