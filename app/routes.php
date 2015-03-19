<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 		'HomeController@index');
Route::get('home', 		'HomeController@index');
Route::get('login', 	'AuthController@index');

Route::get('dashboard',		'DashboardController@index');
Route::get('dashboard/add', 'DashboardController@add');

Route::get('create', 		'DashboardController@create');
Route::get('editPage',		'DashboardController@editPage');
Route::get('editPage/{id}', 'DashboardController@editPageShow');
Route::post('update/{id}',	'DashboardController@update');
Route::post('update', array(''));

Route::get('deleteRow/{id}','DashboardController@destroy');

Route::post('save', 		'DashboardController@store');


Route::get('contact', 		'HomeController@contact');
Route::get('portfolio',		'HomeController@portfolio');
Route::get('work', 	    	'HomeController@work');
Route::get('bio',       	'HomeController@bio');
Route::get('event',			'HomeController@event');
Route::get('fineArt',		'HomeController@fineArt');
Route::get('gallery', 		'HomeController@gallery');
Route::get('largeArt/{id}',	'HomeController@largeArt')->where('id','\d+');
Route::get('largePort/{id}','HomeController@largePort')->where('id','\d+');
Route::get('largeCom/{id}',	'HomeController@largeCom')->where('id','\d+');
Route::get('next/{id}',		'HomeController@largeArt')->where('id','\d+');

Route::post('login',		'AuthController@auth');
Route::post('logout',	 	'AuthController@logout');

Route::Resource('photo', 	'DashboardController');
Route::bind('repository\formInterface', 'repository\formInput');

Route::post('next/{id}', 	'HomeController@largeArt')->where('id', '\d+');
Route::post('next',array(''));


