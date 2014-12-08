<?php

class BidSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		DB::table('bids')->delete();

		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 6; $i++)
		{
		  $bids = Bids::create(array(
		    'description' => $faker->paragraph(),
		    'listing_id' => $faker->randomDigit,
		    'bidder' => $faker->randomDigit
		    ));
		}

	}
}

