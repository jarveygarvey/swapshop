<?php 
class AccountController extends BaseController {
	//viewing form
	public function getCreate(){
		return View::make('account.create');
	}
	//submitting form
	public function postCreate(){
		$validator = Validator::make(Input::all(),
			array(
				'email' => 'required|max:50|email|unique:user_table',
				'username' =>'required|max:20|min:5|unique:user_table',
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
		// return 'hello';
	}
}
