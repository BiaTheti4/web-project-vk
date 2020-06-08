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

Route::get('/', 'ApiController@welcomeAction');
Route::get('/news', 'ApiController@newsAction');
Route::get('/chat', 'ApiController@chatAction');
Route::get('/communities', 'ApiController@communitiesAction');
Route::get('/friends', 'ApiController@friendsAction');
Route::get('/login', 'ApiController@loginAction');
Route::get('/messages', 'ApiController@messagesAction');
Route::get('/music', 'ApiController@musicAction');
Route::get('/register', 'ApiController@registerAction');
Route::get('/getArticles','ApiController@getArticles');
