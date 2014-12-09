<?php 
class AccountController extends BaseController {
	public function getSignIn(){
		return View::make('signin');
	}

	public function postSignIn(){
		$validator = Validator::make(Input::all(),
			array(
				'username' =>'required',
				'password' =>'required'
				));
		if($validator->fails()){
			return Redirect::route('sign-in')
				->withErrors($validator)
				->withInput();
		}else {
			$auth = Auth::attempt(array(
				'username' => Input::get('username'),
				'password' => Input::get('password'),
				'active' => 1 ));
			if($auth){
				//redirect to intended page
				return Redirect::intended('/');
			}else{ Redirect::route('sign-in')
				->with('global', 'There was a problem signing you in. Have you activated?')
				->withErrors($validator)
				->withInput();
		}
		}
		return Redirect::route('sign-in')
		->with('global', 'There was a problem signing you in. Have you activated?');
	}

	public function getSignOut(){
		Auth::logout();
		return Redirect::route('index');
	}
	//viewing form
	public function getCreate(){
		return View::make('create');
	}
	//submitting form
	public function postCreate(){
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|max:50|email|unique:users',
				'username' =>'required|max:20|min:5|unique:users',
				'password' =>'required|min:6',
				'password_again' =>'required|same:password',

				));
		if($validator->fails()){
			return Redirect::route('account-create')
				->withErrors($validator)
				->withInput();
		}else {
			$email=Input::get('email');
			$username=Input::get('username');
			$password=Input::get('password');
			//Activation code
			$code = str_random(60);
			$create = User::create(array(
				'email' =>$email,
				'username' =>$username,
				'password' =>Hash::make($password),
				'code' =>$code,
				'active' =>0
				));

			if($create)
				//send email
				//with global, string
				return Redirect::route('home')
			->with('global', 'A/c has been created');
		}
	}
}
