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

Route::get('/', function(){
	return View::make("index");
});

Route::get('/timeline', function(){
	return View::make("timeline");
});

Route::get('/timeline/1', function(){
	return View::make("1");
});

Route::get('/timeline/1/problem/{id}', 'ProblemController@detail');
