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
		// different ways to perform sql queries, either we can do normal SQL or we can use Laravel built in functions
	//$user = DB::table('employees')->get();
	//$user = DB::table('employees')->where('country', 'United Kingdom')->get();
	//$user = DB::table('employees')->whereBetween('employeeid', array('3', '5'))->get();
	// $user = DB::table('employees')->orderBy('lastName', 'asc')->get();
	$user = DB::table('employees')->select('firstname', 'country')->get();
	//$user = DB::table('employees')->where('employeeid','<', '4')->orWhere('country','United Kingdom')->get();
	//$user = DB::select('SELECT * FROM employees WHERE country = ?', array('United Kingdom'));

	// foreach($user as $u)
	// {
	// 	echo $u->LastName.'<br>';
	// }

	// echo '<pre>';
	// dd($user);
	// echo '</pre>';

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

		// laravel way of inserting data to table
	DB::table('test')->insert(array(
			'fname' => $input['fname'], 
			'lname' => $input['lname']
		));
	
	//DB::insert('INSERT INTO test (fname, lname) VALUES (?, ?)', array($input['fname'], $input['lname']));


	$title = 'Home';
	return View::make('home/index')
			->with('title',$title);
});