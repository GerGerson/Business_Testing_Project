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

Route::get('/timeline/2', function(){
	return View::make("2");
});

Route::get('/timeline/{event}/problem/{id}', 'ProblemController@detail');

Route::get('/timeline/photo/{id}', 'PhotoController@resize');
Route::get('/timeline/photo/{id}/{problem_id}', 'PhotoController@resize_problem');