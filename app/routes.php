<?php

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
	));

//Authenticated group
Route::group(array('before' => 'guest'), function(){
//sign out (GET)
	Route::get('/account/sign-out/', array(
		'as' => 'sign-out',
		'uses' =>'AccountController@getSignOut'
	));
});

//Unauthenticated group
Route::group(array('before' => 'guest'), function(){//route group - nests routes
	
	//CSRF protection group
	Route::group(array('before'=>'csrf'), function(){
		//create account (Post)
		Route::post('/account/create', array( // we want post (and not get) to be protected by cross site request forgery
			'as' => 'account-create', //can name same as get
			'uses' =>'AccountController@postCreate'
		)); //effectively picking up URL /account/create and passing it as a specific name 'account-create'
	//sign in (Post)
		Route::post('/account/sign-in/', array(
			'as' => 'sign-in',
			'uses' =>'AccountController@postSignIn'
		));

	});
	//sign in (GET)
	Route::get('/account/sign-in/', array(
		'as' => 'sign-in',
		'uses' =>'AccountController@getSignIn'
	));

	//create account (GET)
	Route::get('/account/create', array(
		'as' => 'account-create',
		'uses' =>'AccountController@getCreate'
	));
	});