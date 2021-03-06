<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome ()
	{
		return Redirect::action('PostsController@index');

		// return View::make('welcome');  //this shows the welcome page
	}

	// public function rollDice($number)
	// {
	// 	// Modify the route to take in a parameter named guess.
	// 	//Someone will access the route by visiting http://blog.dev/rolldice/1, where 1 is their guess.
	//     // Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
	//     // Modify the route and view so that you can display the guess in addition to the roll and also tell if the guess matches the roll.
	//     $random = rand(1, 6);
	// 	$data = array('number' => $number, 'random' => $random);
	//     return View::make('roll-dice')->with($data); //sending values to the view
	//     // return View::make('roll-dice', $data); //another option
	//     // return View::make('roll-dice')->with('number', $number); //another option
	// }

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	// public function showWelcome($name)
	// {
	// 	$data = array('name' => $name);
 //    	return View::make('my-first-view')->with($data); //sending values to the view
	// }

	public function getLogin() //show the login form
	{
		return View::make('login');
	}
	public function getLogout() //redirect to logout page
	{
		Auth::logout();
		Session::flash('successMessage', 'Successfully logged out!');
		return Redirect::action('PostsController@index');

		// return Redirect::action('HomeController@showWelcome'); //can also be success page, yay you logged out
	}
	public function postLogin()  //grab the contents of the login form
	{
		$username = Input::get('username');
		$password = Input::get('password');

		if (Auth::attempt(array('username' => $username, 'password' => $password))) {
			Session::flash('successMessage', 'Successfully logged in!');
 		   return Redirect::intended('/posts');
		} else {
    		// login failed, go back to the login screen
    		Session::flash('errorMessage', 'Login Failed!!');
    		return Redirect::back();
		}
	}

}
