<?php

	Route::get('/', array(
		'as' => 'home',
		'uses' => 'HomeController@home'
	));
/*
 *  Unauthenticated group
 */
	Route::group(array('before' => 'guest'), function(){//route group - nests routes
	
	//CSRF protection group
	Route::group(array('before'=>'csrf'), function(){
		//create account (Post)
		Route::post('/account/create', array( // we want post (and not get) to be protected by cross site request forgery
			'as' => 'account-create', //can name same as get
			'uses' =>'AccountController@postCreate'
		)); //effectively picking up URL /account/create and passing it as a specific name 'account-create'
	});
	//create account (GET)
	Route::get('/account/create', array(
		'as' => 'account-create',
		'uses' =>'AccountController@getCreate'
	));
});