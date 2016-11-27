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

Route::get('/', function () {
    return view('index');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/ticketing', function () {
    return view('ticketing');
});

//this is new to fix chat window
//Route::get('/chatlogs', 'ChatController@chat');

Route::get('/chatlogs', 'ChatController@addMsg');

Route::post('/getChats', 'ChatController@chat');