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
    return redirect('/chartcommunications/');
});


Route::get('chartcommunications/', 'ChartCommunications\ChartCommunicationsController@index');
Route::get('chartcommunications/{provider_num}/today', 'ChartCommunications\ChartCommunicationsController@today');
Route::get('chartcommunications/{provider_num}/yesterday', 'ChartCommunications\ChartCommunicationsController@yesterday');
Route::get('chartcommunications/{provider_num}/7days', 'ChartCommunications\ChartCommunicationsController@sevenDays');