<?php

class AuthController extends Controller {
	public function getIndex()
	{
		return View::make('home');
	}
	
	public function getLogin()
	{
		return View::make('sign-in');
	}

	public function postLogin()
	{
		return View::make('sign-in');
	}

}
