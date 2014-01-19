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

// These routes link and load the pages
Route::get('/', function()
{
	//$user = DB::select('SELECT * FROM employees WHERE country = ?', array('United Kingdom'));

	// echo '<pre>';
	// print_r($user);
	// echo '</pre>';

	//DB::insert('INSERT INTO test (fname, lname) VALUES (?, ?)', array('Adam', 'Long'));

	$title = 'Home';
	return View::make('home/index')
			->with('title',$title);
});

Route::get('about', function()
{
	$title = 'About';
	return View::make('home/about')
			->with('title', $title);
});

	// post it with a name, if we post it using just '/' it will not work
// right now it takes the values from the form and inserts it into the test
// table in the database
Route::post('test', function()
{
	$input = Input::all();

	DB::insert('INSERT INTO test (fname, lname) VALUES (?, ?)', array($input['fname'], $input['lname']));


	$title = 'Home';
	return View::make('home/index')
			->with('title',$title);
});