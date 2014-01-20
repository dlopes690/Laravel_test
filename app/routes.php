<?php

// /*
// |--------------------------------------------------------------------------
// | Application Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register all of the routes for an application.
// | It's a breeze. Simply tell Laravel the URIs it should respond to
// | and give it the Closure to execute when that URI is requested.
// |
// */


// These routes link and load the pages
Route::get('/', function()
{


	$title = 'Home';
	return View::make('home/index')
			->with('title',$title);
});



Route::resource('posts', 'PostsController');

