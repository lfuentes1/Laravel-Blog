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

Route::get('/', 'HomeController@sayHello');

Route::get('/portfolio', 'HomeController@showPortfolio');  

Route::get('/resume', 'HomeController@showResume');

// Route::get('/sayhello/{name?}', function($name = '')
// {
// 	if ($name == '') {
// 	  	return "Hi, there!";
// 	}
//    return "Hello, $name!";
// });

Route::get('/firstview/{name}', 'HomeController@showWelcome');

// Create a route that responds to a GET request on the path /rolldice.
Route::get('/rolldice/{number}', 'HomeController@rollDice');

Route::resource('/posts', 'PostsController');



