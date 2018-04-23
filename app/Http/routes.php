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

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/testModel', 'Test\TestModelController@index');

Route::group(['prefix'=>'testChart'], function () {
    Route::get('/', 'TestChartController@index');
    Route::get('bar_stack', 'TestChartController@index');
    Route::get('bar_simple', 'TestChartController@bar_simple');
});

Route::group(['prefix'=>'test','namespace'=>'Test'], function () {
    Route::get('/', 'TestChartController@index');
    Route::get('bar_stack', 'TestChartController@index');
    Route::get('bar_simple', 'TestChartController@bar_simple');
});
