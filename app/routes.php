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


Route::get('/', 'HomeController@getIndex');
Route::get('login', 'HomeController@getLogin');
Route::get('register', 'HomeController@getRegister');
Route::post('register', 'HomeController@postRegister');
Route::post('login', 'HomeController@postLogin');
Route::get('logout', 'HomeController@logout');

Route::group(array('before' => 'auth'), function(){

	Route::get('admin', 'AdminController@getIndex');

});

// These routes link and load the pages
	// added all these to the home controller
// Route::get('/', function()
// {
	
// 	$users = User::all();

// 	$title = 'Home';
// 	return View::make('home/index')->with('users', $users)
// 			->with('title',$title);
// });

// Route::get('login', function()
// {
// 	$title = 'Login';

// 	return View::make('home.login')
// 	->with('title',$title);
// });

// Route::get('register', function()
// {
// 	$title = 'Register';

// 	return View::make('home.register')
// 	->with('title',$title);
// });

Route::resource('users', 'UsersController');