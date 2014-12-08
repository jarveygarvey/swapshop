<?php

class ImageSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 6; $i++)
		{
		  $images=Images::create(array(
		    'user_id'=>$faker->randomDigit,
		    'image_location'=>$faker->imageUrl($width = 640, $height = 480)
		    ));
		}
	}
}

