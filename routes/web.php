<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth/login ');
});

Route::get('/scheduling', function () {
    return view('scheduling');
});

Route::get('/inputs', function () {
    return view('inputs');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/groups', function () {
    return view('groups');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
