<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowController;

use App\Http\Controllers\FavoriteController;
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

Route::get('/', 'App\Http\Controllers\HomeController@welcome');

Route::get('/movies', 'App\Http\Controllers\HomeController@index');
Route::get('/movies/{id}', 'App\Http\Controllers\ShowController@show');

// Route::get('/home', 'App\Http\Controllers\HomeController@home');

Route::get('/profile/{id}', 'App\Http\Controllers\UserController@show');

Route::resource('favorites', FavoriteController::class);

// Route::get('/test/testing', 'App\Http\Controllers\UserController@index');

Auth::routes();

