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

Route::get('/', function()
{
	return Redirect::to('login');
});

$admintemplate = 'admintemplate';

Route::get('/secure/employees/create', function() use ($admintemplate)
{
	View::name($admintemplate, 'secure/employees/create');
	$layout = View::of('secure/employees/create');
	return $layout->nest('content', 'secure/employees/create');
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


/* 
|====================================================================================
|====================================================================================
|ENCRYPT ID ROUTE
|====================================================================================
|====================================================================================
*/

Route::get('encrypt/{id}',function($id)
{
	print_r(Crypt::encrypt($id));
});

Route::get('decrypt/{id}',function($id)
{
	print_r(Crypt::decrypt($id));
});

/* 
|====================================================================================
|====================================================================================
|END OF ENCRYPT ID ROUTE
|====================================================================================
|====================================================================================
*/