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


	public function showBio()
	{
		return View::make('bio');
	}



	public function showGallery()
	{
		return View::make('gallery');
	}


	public function showHome()
	{
		return View::make('home');
	}



	public function showContact()
	{
		return View::make('contact');
	}

}

