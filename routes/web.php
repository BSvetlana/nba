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
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/teams','TeamsController@index')->name('all-teams');
Route::get('/teams/{id}','TeamsController@show')->name('single-team');

Route::get('players/{id}','PlayersController@show')->name('single-player');

Route::post('/teams/{id}/comment', 'CommentsController@store')->name('add-comment');

Route::get('/register','RegisterController@create')->name('register');
Route::post('/register','RegisterController@store');

Route::get('/login','LoginController@create')->name('login');
Route::post('/login','LoginController@store')->name('add-login');
Route::get('/logout','LoginController@destroy')->name('logout');

Route::get('/register/verify/{id}', 'RegisterController@verify')->name('register-verify');