<?php

class WatchlistSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();

		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 6; $i++)
		{
		  $watchlists = Watchlist::create(array(
		    'user_id' => $faker->randomDigit,
		    'listing_id' =>$faker->randomDigit
		    ));
		}
	}
}

