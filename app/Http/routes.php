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
//view home page
Route::get('/', function () {
    return view('index');
});

//view application form
Route::get('/online_application', function () {
    return view('online_application');
});

//application form submit
Route::post('/applicationPost','siteController@applicationpost');