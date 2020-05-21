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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chat', function () {
    return view('chat');
});

Route::get('/communities', function () {
    return view('communities');
});

Route::get('/friends', function () {
    return view('friends');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/messages', function () {
    return view('messages');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/register', function () {
    return view('register');
});

