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

// Route::get('/profil/{region}/{name}', [
// 	'uses'=>'ProfileController@index',	
// 	'as'=>'profile',
// ]);

Route::get('/profil/tr/{name}', [
	'uses'=>'ProfileController@index',	
	'as'=>'profile',
]);

Route::get('/sampiyonlar',[
	'uses'=>'ChampionsController@all',
	'as'=>'champs.all'
]);

Route::get('/sampiyonlar/{seo}',[
	'uses'=>'ChampionsController@get',
	'as'=>'champs.get'
]);

Route::get('/esyalar',[
	'uses'=>'ItemsController@all',
	'as'=>'items.all'
]);

Route::get('/esyalar/{name}',[
	'uses'=>'ItemsController@get',
	'as'=>'items.get'
]);

Route::get('/kabiliyetler',[
	'uses'=>'MasteriesController@all',
	'as'=>'masteries.all'
]);

Route::get('/kabiliyetler/{name}',[
	'uses'=>'MasteriesController@get',
	'as'=>'masteries.get'
]);

Route::get('/profil-ikonlari',[
	'uses'=>'ProfileIconController@all',
	'as'=>'icons.all'
]);

Route::get('/runler',[
	'uses'=>'RunesController@all',
	'as'=>'runes.all'
]);

Route::get('/runler/{name}',[
	'uses'=>'RunesController@get',
	'as'=>'runes.get'
]);

Route::get('/sihirdar-buyuleri',[
	'uses'=>'SummonerSpellsController@all',
	'as'=>'spells.all'
]);

Route::get('/sihirdar-buyuleri/{name}',[
	'uses'=>'SummonerSpellsController@get',
	'as'=>'spells.get'
]);

Route::get('/sozluk',[
	'uses'=>'DictionaryController@get',
	'as'=>'dictionary.get'
]);

Route::get('/count',[
	'uses'=>'ProfileController@get_count',
	'as'=>'profile.get'
]);

Route::get('/{type}-sampiyonlar',[
	'uses'=>'ChampionsController@get_champions_by_type',
	'as'=>'champions.by_type'
]);

Route::get('/sampiyon-rotasyonu',[
	'uses'=>'ChampionsController@free',
	'as'=>'champions.free'
]);

Route::group(['prefix' => 'api/v1'], function () {

    // Static Data
    Route::get('/champions', [
		'uses' => 'StaticDataController@get_all_champions',
		'as'   => 'sd.champions',
	]);

	 Route::get('/champion/', [
		'uses' => 'StaticDataController@get_champion',
		'as'   => 'sd.champion',
	]);

	Route::get('/champion/comments', [
		'uses' => 'StaticDataController@get_champion_comments',
		'as'   => 'sd.championcomments',
	]);

    Route::get('/items', [
		'uses' => 'StaticDataController@get_all_items',
		'as'   => 'sd.items',
	]);
	Route::get('/item', [
		'uses' => 'StaticDataController@get_item',
		'as'   => 'sd.item',
	]);

	Route::get('/item/comments', [
		'uses' => 'StaticDataController@get_item_comments',
		'as'   => 'sd.itemcomments',
	]);

    Route::get('/masteries', [
		'uses' => 'StaticDataController@get_all_masteries',
		'as'   => 'sd.masteries',
	]);

	Route::get('/mastery/comments', [
		'uses' => 'StaticDataController@get_mastery_comments',
		'as'   => 'sd.masterycomments',
	]);


    Route::get('/profile_icons', [
		'uses' => 'StaticDataController@get_all_profile_icons',
		'as'   => 'sd.profile_icons',
	]);
    Route::get('/runes', [
		'uses' => 'StaticDataController@get_all_runes',
		'as'   => 'sd.runes',
	]);

	Route::get('/rune/comments', [
		'uses' => 'StaticDataController@get_rune_comments',
		'as'   => 'sd.runecomments',
	]);

    Route::get('/summoner_spells', [
		'uses' => 'StaticDataController@get_all_summoner_spells',
		'as'   => 'sd.summoner_spells',
	]);

	Route::get('/spell/comments', [
		'uses' => 'StaticDataController@get_spell_comments',
		'as'   => 'sd.runecomments',
	]);

	Route::get('/get_item_tip',[
		'uses'=>'StaticDataController@get_item_tip',
		'as'=>'sd.getTip'
	]);
});

Route::get('item-mapper',[
	'uses'=>'AdminController@item',
	'as'=>'admin.item'
]);

Route::get('rune-mapper',[
	'uses'=>'AdminController@rune',
	'as'=>'admin.rune'
]);

Route::get('mastery-mapper',[
	'uses'=>'AdminController@mastery',
	'as'=>'admin.mastery'
]);

Route::get('spell-mapper',[
	'uses'=>'AdminController@spell',
	'as'=>'admin.spell'
]);

Route::get('/itemTip-mapper',[
	'uses'=>'AdminController@tip',
	'as'=>'admin.tip'
]);

Route::get('/counter-mapper',[
	'uses'=>'AdminController@counter',
	'as'=>'admin.counter'
]);

Route::post('/champion/save-comment',[
	'uses'=>'ChampionsController@save_comment',
	'as'=>'champion.comment'
]);

Route::post('/item/save-comment',[
	'uses'=>'ItemsController@save_comment',
	'as'=>'item.comment'
]);

Route::post('/rune/save-comment',[
	'uses'=>'RunesController@save_comment',
	'as'=>'item.comment'
]);

Route::post('/mastery/save-comment',[
	'uses'=>'MasteriesController@save_comment',
	'as'=>'mastery.comment'
]);

Route::post('/spell/save-comment',[
	'uses'=>'SummonerSpellsController@save_comment',
	'as'=>'spell.comment'
]);



Route::post('/item-mapper',[
	'uses'=>'AdminController@add_item_to_champion',
	'as'=>'admin.add_item'
]);

Route::post('/rune-mapper',[
	'uses'=>'AdminController@add_rune_to_champion',
	'as'=>'admin.add_item'
]);

Route::post('/mastery-mapper',[
	'uses'=>'AdminController@add_mastery_to_champion',
	'as'=>'admin.add_item'
]);

Route::post('/spell-mapper',[
	'uses'=>'AdminController@add_spell_to_champion',
	'as'=>'admin.add_item'
]);

Route::post('/itemTip-mapper',[
	'uses'=>'AdminController@add_tip_to_item',
	'as'=>'admin.add_itemTip'
]);

Route::post('/counter-mapper',[
	'uses'=>'AdminController@add_counter_to_champion',
	'as'=>'admin.add_counter'
]);




Route::get('/not-found', function(){
	return view('notfound');
});

Route::post('/profile_get', 'ProfileController@profile_get');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
