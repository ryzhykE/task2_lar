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

	Route::get('/',['uses'=>'TaskController@getArtist','as'=>'artists']);
	Route::get('/artist/{id}',['uses'=>'TaskController@showArtist','as'=>'artist']);
	Route::get('/album/{id}',['uses'=>'TaskController@showAlbum','as'=>'album']);
	Route::get('/track/{id}',['uses'=>'TaskController@showTrack','as'=>'track']);
