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
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\NewsController;

Route::get('/teams','TeamsController@index')->name('all-teams');
Route::get('/teams/{id}','TeamsController@show')->name('single-team');
Route::get('/news/team/{team}','TeamsController@teamNews')->name('team-news');

Route::get('players/{id}','PlayersController@show')->name('single-player');

Route::post('/teams/{id}/comment', 'CommentsController@store')->name('add-comment');
Route::get('/comments/forbidden', 'CommentsController@store')->name('comment-forbidden');

Route::get('/register','RegisterController@create')->name('register');
Route::post('/register','RegisterController@store');
Route::get('/register/verify/{id}', 'RegisterController@verify')->name('register-verify');

Route::get('/login','LoginController@create')->name('login');
Route::post('/login','LoginController@store')->name('add-login');
Route::get('/logout','LoginController@destroy')->name('logout');

Route::get('/news','NewsController@index')->name('news');
Route::get('/news/{id}','NewsController@show')->name('single-news');



