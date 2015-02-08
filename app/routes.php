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

<<<<<<< HEAD
Route::post('/contact', 'MemberController@SaveContact');

//Login Part
=======
/*
	User Route
*/
>>>>>>> 304c8ffb981638cae1bf8f48cbb9eaed8bcab69b
Route::post('/login_check', 'MemberController@LoginCheck');

Route::get('/logout', 'MemberController@Logout');

Route::get('/register', function(){
	return View::make('register');
});

Route::post('/register', 'MemberController@Register');


/*
	Gas Route
*/

Route::group(array('before' => 'gas_detail_auth_check'), function()
{
	Route::get('/gas','GasController@index');
	
	Route::get('/gas/getRecord/{order_id}', 'GasController@getRecord');
	Route::get('/gas/getStandardValue', 'GasController@getStandardValue');
});

Route::get('/gas/create/{id}', ['as' => 'front.gas.create.get', 'uses' => 'GasController@createGasRecord']);
Route::post('/gas/store', ['as' => 'front.gas.store.post', 'uses' => 'GasController@storeGasRecord']);

/*
	Order Route
*/
Route::get('/order', ['as' => 'front.order.index.get', 'uses' => 'OrderController@showOrderList']);


Route::get('/booking',function(){
	return View::make('booking');
});



/*	Parameters for Submit of reserve:
		name : date
		type : date
	
		name : period
		type : int (0-2)
	
		*Login required
	
	Return (int):
		Last insert id or 0
*/
Route::post('/booking/submit/{date}/{period}/{uid}', 'BookingController@submit');


/*	Parameters for Get Reserves By Date:
		name : date_from
		type : date
	
		name :date_to
		type : date
	
	Return:
		Object or NULL
*/
Route::post('/booking/getReservesByDate/{date_from}/{date_to}', 'BookingController@getReservesByDate');

/*	Parameters for Booking Check: 
		name : date	
		type : date
	
		name : period
		type : int (0-2)
	
	Return (String):
		false => Not available
		true => Available
*/
Route::post('/booking/check', 'BookingController@checkReserve');
