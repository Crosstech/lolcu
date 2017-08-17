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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rito', 'DemoController@index');
Route::post('/user_detail', 'DemoController@user_detail');


Route::get('/champion/{name}', 'DemoController@getChampion');
Route::get('/mastery/{id}', 'DemoController@mastery');