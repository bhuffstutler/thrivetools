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
    return Auth::user();
});


Route::get('chartcommunications', 'ChartCommunications\ChartCommunicationsController@index');
Route::get('chartcommunications/actions', 'ChartCommunications\ChartCommunicationsController@actions');
Route::get('chartcommunications/today', 'ChartCommunications\ChartCommunicationsController@today');
Route::get('chartcommunications/yesterday', 'ChartCommunications\ChartCommunicationsController@yesterday');
Route::get('chartcommunications/7days', 'ChartCommunications\ChartCommunicationsController@sevenDays');

Route::get('chartcommunications/test', 'ChartCommunications\ChartCommunicationsController@test');