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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('item', 'TODOController');

Route::get('ajax-items', 'TODOController@ajaxItems');

Route::get('json', 'TODOController@json');

// Route::get('item', ['as' => 'item.index', 'uses' => 'TODOController@index']);
// Route::get('item/create', ['as' => 'item.create', 'uses' => 'TODOController@create']);
// Route::post('item/store', ['as' => 'item.store', 'uses' => 'TODOController@store']);
// Route::delete('item/{item}/destroy', ['as' => 'item.destroy', 'uses' => 'TODOController@destroy']);
// Route::get('item/{item}/edit', ['as' => 'item.edit', 'uses' => 'TODOController@edit']);
// Route::put('item/{item}', ['as' => 'item.update', 'uses' => 'TODOController@update']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
