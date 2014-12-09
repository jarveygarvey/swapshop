<?php

	Route::get('/', array(
		'as' => 'home',
		'uses' => 'HomeController@home'
	));

	// Route::get('/listing', array(
	// 	'as' => 'listing',
	// 	'uses' => 'ListingController@getListing'
	// ));

	// Route::get('/listing', function(){
	// 	return View::make('index');
	// });
	
	// Route::post('upload',function(){
	// 	Input::file('image');
	// 	var_dump($image->getRealPath());
	// 	$filename = $image->getClientOriginalName();
	// 	if(Image::make($image->getRealPath())>resize('200','200')->save('public/img'.$filename)){
	// 		return 'image uploaded';
	// 	}
	// });


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

