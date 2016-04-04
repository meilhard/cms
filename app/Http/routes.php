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
    return view('welcome');
});

Route::get('/pages', function() {
    return view('pages');
});

Route::get('/pages.json', ['uses' => 'PageController@getPages', 'as' => 'getPages']);
Route::get('/content.json', ['uses' => 'ContentController@getContent', 'as' => 'getContent']);