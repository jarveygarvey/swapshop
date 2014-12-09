// <?php

// class ListingController extends BaseController {
	
// 	public function getListing(){
// 		return View::make('listing');
// 	}

// 	public function create(){
// 		$image=Input::file('image');
// 		// var_dump($image->getRealPath());
// 		$filename = $image->getClientOriginalName();
// 		Image::make($image->getRealPath())->resize('200','200')->save('public/uploads/'. $filename);


// 		return Redirect::home();
// 	}

// }





// class ListingController extends BaseController {
// 	//viewing form
// 	public function getCreate(){
// 		return View::make('listing.create');
// 	}
// 	//submitting form
// 	public function postCreate(){
// 		$validator = Validator::make(Input::all(),
// 			array(
// 				// 'email' => 'required|max:50|email|unique:user_table',
// 				'username' =>'required|max:20|min:5|unique:user_table',
// 				'password' =>'required|min:6',
// 				// 'password_again' =>'required|same:password',

// 				));
// 		if($validator->fails()){
// 			return Redirect::route('listing-create')
// 				->withErrors($validator)
// 				->withInput();
// 		}else {
// 			// $email=Input::get('email');
// 			$username=Input::get('username');
// 			$password=Input::get('password');
// 			//Activation code
// 			// $code = str_random(60);
// 			$create = Listings::create(array(
// 				'title'=>$title,
// 				'value'=>$value,
// 				'description'=>$description,
// 				'size'=>$size,
// 				'for-sale'=>$for_sale,
// 				'category'=>$category,
// 				'posted_by'=>$posted_by
// 				));

// 			if($create)
// 				//send email
// 				//with global, string
// 				return Redirect::route('home')
// 			->with('global', 'A/c has been created');
// 		}
// 	}
// }






