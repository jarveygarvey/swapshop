<?php

class HomeController extends BaseController {
	public function home(){
		$user = User::where("username","garveyj2")->get();
		#$user = User::find("garveyj2");
		echo '<pre>',print_r($user),'</pre>';
		// Mail::send('emails.auth.test', array('name' => 'Phil'), function($message){
		// 	$message->to('delaneyphil@mail.ru', 'Phil G')->subject('test email');
		// });
		return View::make('home');
	}
	
}
