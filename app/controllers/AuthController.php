<?php

class AuthController extends Controller {
	public function getIndex()
	{
		return View::make('SignUp1');
	}
	
	public function getLogin()
	{
		return View::make('login');
	}

	public function postLogin()
	{
		return View::make('contact');
	}

}
