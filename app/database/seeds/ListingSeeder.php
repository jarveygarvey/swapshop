<?php

class ListingSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		DB::table('listings')->delete();

		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 6; $i++)
		{
		  $listings = Listings::create(array(
		    'title' => $faker->word,
		    'value' => $faker->randomFloat(),
		    'description' => $faker->paragraph(),
		    'size' => $faker->numberBetween(0,20),
		    'for_sale' => $faker->boolean(),
		    'category' => $faker->randomDigit,
		    'posted_by' => $faker->randomDigit
		    ));
		}
	}
}
