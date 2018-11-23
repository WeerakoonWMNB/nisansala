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

Route::get('/home','siteController@index');

//view application form
Route::get('/online_application', function () {
    return view('online_application');
});

//application form submit
Route::post('/applicationPost','siteController@applicationpost');

Route::auth();

Route::get('/', 'HomeController@index');
Route::post('form','imageController@fileUpload');
Route::post('photoform','imageController@photofileUpload');
Route::delete('image-gallery/{id}', 'imageController@destroy');
Route::post('addNews', 'newsController@addNews');
Route::delete('newsDelete/{id}', 'newsController@destroy');
Route::post('newsUpdate/{id}', 'newsController@update');

Route::delete('applicationDelete/{id}', 'siteController@destroy');
Route::post('/detailreport/{id}', 'reportController@appl');

Route::post('/changePassword','changepassController@changePassword')->name('changePassword');

Route::get('/gallery', 'HomeController@gallery');
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::post('/feedback', 'HomeController@feedback');
Route::get('mail', 'HomeController@mail');