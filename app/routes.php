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
	//$user = DB::table('employees')->select('firstname', 'country')->get();
	//$user = DB::table('employees')->where('employeeid','<', '4')->orWhere('country','United Kingdom')->get();
	//$user = DB::select('SELECT * FROM employees WHERE country = ?', array('United Kingdom'));

	// foreach($user as $u)
	// {
	// 	echo $u->LastName.'<br>';
	// }

	// echo '<pre>';
	// dd($user);
	// echo '</pre>';

	$users = DB::table('test')->get();

	$title = 'Home';
	return View::make('home/index')->with('users', $users)
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

		// creates the validation rules, and error messages
	$rules = array(
		'fname' => 'required|min:5',
		'lname' => 'required'
	);

	$messages = array(
		'fname.required' => 'A First Name is Required',
		'fname.min'		=> 'First name must be at least 5 characters',
		'lname.required' => 'A Last Name is Required'
	);

		// creates the validator which is required to perform validation
	$v = Validator::make($input, $rules, $messages);

		// if validation passes, go ahead and insert name into table
		// then redirect to the homepage
	if($v->passes())
	{
		DB::table('test')->insert(array(
			'fname' => $input['fname'], 
			'lname' => $input['lname']
		));

		return Redirect::to('/');
	}
		// if it fails, show the error messages and load create page again
	else
	{
		return Redirect::to('create')
			->withInput()
			->withErrors($v)
			->with('message');
	}

		// laravel way of inserting data to table
	
	
	//DB::insert('INSERT INTO test (fname, lname) VALUES (?, ?)', array($input['fname'], $input['lname']));


	$title = 'Home';
	return View::make('home/index')
			->with('title',$title);
});

Route::get('create', function()
{
	$title = 'Add New User';
	return View::make('home/create')
			->with('title',$title);
});