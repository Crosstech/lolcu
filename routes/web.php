<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/profil/{region}/{name}', [
	'uses'=>'HomeController@profile_index',	
	'as'=>'profile',
]);

Route::group(['prefix' => 'api/v1'], function () {

    // Static Data


    // Match Data

    // Summoner Data
});

Route::post('/profile_get', 'HomeController@profile_get');