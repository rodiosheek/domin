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
use App\Http\Controllers\TestAjaxController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/search', function () {
   return view('pages.search');
});

Route::get('/flat', function() {
    return view('pages.flat');
});

Route::post('search', 'TestAjaxController@getAjax');

Route::get('flat/{id}', 'TestAjaxController@getFlat');

Route::get('get_info/{data}', 'AjaxController@getInfo');

Route::get('get-area', 'AjaxController@getArea');
