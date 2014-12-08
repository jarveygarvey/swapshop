<?php

class ImageSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 6; $i++)
		{
		  $images=Images::create(array(
		    'image_location'=>$faker->imageUrl($width = 640, $height = 480),
		    'listing_id'=>$faker->randomDigit
		  ));
		}
	}
}

