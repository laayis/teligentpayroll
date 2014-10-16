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


Route::get('login','LoginController@login');
Route::post('login','LoginController@checkLogin');
Route::get('logout','LoginController@logout');

/*Route::get('/', function()
{
	return View::make('login');
});*/

Route::get('/test', function()
{
	return View::make('admintemplate');
});

/* 
|====================================================================================
|====================================================================================
|ADMIN ROUTE
|====================================================================================
|====================================================================================
*/

Route::group(array('prefix' => Config::get('app.prefix'), 'before'=>'auth'), function()
{
	/************** USER ROUTES ******************/

	Route::resource('users', 'UsersController');
});

/* 
|====================================================================================
|====================================================================================
|END OF ADMIN ROUTE
|====================================================================================
|====================================================================================
*/