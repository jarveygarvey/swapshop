<?php

class SizeTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		DB::table('sizes')->delete();


		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 6; $i++)
		{
		  $sizes = Sizes::create(array(
		    'user_id' => $faker->randomDigit,
		    'clothes_size' => $faker->numberBetween(0,18),
		    'shoe_size' => $faker->numberBetween(1,13)
		    ));
		}

		// DB::table('users')->insert($users);

	}
}

