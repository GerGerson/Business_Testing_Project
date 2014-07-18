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

//Route::get('/timeline/{event}', 'ProblemController@detail');
Route::get('/timeline/{event}', 'ProgressController@view');

/*
Route::get('/timeline/2', function(){
	return View::make("2");
});*/

//Route::get('/timeline/{event}/problem/{id}', 'ProblemController@detail');
Route::get('/timeline/{event}/problem', 'ProblemController@detail');
Route::get('/timeline/{event}/problem/{id}/photo', 'ProblemController@photo');
Route::get('/timeline/{event}/problem/{id}/video', 'ProblemController@video');

Route::get('/gas', 'GasController@index');

Route::get('/timeline/photo/{id}', 'PhotoController@resize');
Route::get('/timeline/photo/{id}/{problem_id}', 'PhotoController@resize_problem');
Route::get('/main', function(){
	return View::make("onepage-index");
});