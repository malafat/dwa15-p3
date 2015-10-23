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
Route::get('/users', 'UsersController@getIndex');
Route::post('/users', 'UsersController@postIndex');
Route::get('/filler', 'FillerController@getIndex');
Route::post('/filler', 'FillerController@postIndex');
