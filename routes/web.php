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
    Route::get('/champions', [
		'uses' => 'StaticDataController@get_all_champions',
		'as'   => 'sd.champions',
	]);
    Route::get('/items', [
		'uses' => 'StaticDataController@get_all_items',
		'as'   => 'sd.items',
	]);
    Route::get('/masteries', [
		'uses' => 'StaticDataController@get_all_masteries',
		'as'   => 'sd.masteries',
	]);
    Route::get('/profile_icons', [
		'uses' => 'StaticDataController@get_all_profile_icons',
		'as'   => 'sd.profile_icons',
	]);
    Route::get('/runes', [
		'uses' => 'StaticDataController@get_all_runes',
		'as'   => 'sd.runes',
	]);
    Route::get('/summoner_spells', [
		'uses' => 'StaticDataController@get_all_summoner_spells',
		'as'   => 'sd.summoner_spells',
	]);
    

    // Match Data

    // Summoner Data
});

Route::post('/profile_get', 'HomeController@profile_get');