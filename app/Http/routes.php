<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('landing');
});
Route::get('/users', function () {
    return view('users');
});
Route::post('/users', function () {
    return view('users');
});
Route::get('/filler', function () {
    return view('filler');
});
Route::post('/filler', function () {
    return view('filler');
});