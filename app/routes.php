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

Route::get('/', array('before' => 'login_auth_check', function(){
	return View::make("index");
}));

Route::get('/login', function(){
	return View::make("/login");
});

Route::get('/gas_desc', function(){
	return View::make("gas_desc");
});

//Login Part
Route::post('/login_check', 'MemberController@LoginCheck');

Route::group(array('before' => 'gas_detail_auth_check'), function()
{
	Route::get('/gas','GasController@index');
	
	Route::get('/gas/getRecord/{order_id}', 'GasController@getRecord');
});

//Route::get('/gasDetail', 'GasController@index');
Route::get('/logout', 'MemberController@Logout');

Route::get('/register', function(){
	return View::make('register');
});

Route::post('/register', 'MemberController@Register');


Route::get('/booking',function(){
	return View::make('booking');
});