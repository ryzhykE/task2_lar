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

	Route::get('/', function()
	{
		return Redirect::to('/home');
	});

	Route::get('/home', function()
	{
		return View::make('index');
	});

	Route::get('/articles',['uses'=>'TaskController@getArticles','as'=>'articles']);
	Route::get('/article/{id}',['uses'=>'TaskController@showArticle','as'=>'article']);

	Route::get('/about',['uses'=>'TaskController@showAbout','as'=>'about']);

	Route::get('/contact-us',['uses'=>'TaskController@getContacts','as'=>'contact-us']);
	Route::post('/contact-us',['uses'=>'TaskController@postContacts','as'=>'contact-post']);
