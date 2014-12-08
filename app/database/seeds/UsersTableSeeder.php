<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		DB::table('users')->delete();

		$users = User::create(array(
		  'username' => 'garveyj2',
		  'first_name' => 'Jess',
		  'surname' => 'Garvey',
		  'street' => '44 Kempton Way',
		  'town' => 'Navan Road',
		  'county' => 'Dublin 7',
		  'country' => 'Ireland',
		  'email' => 'garveyj2@tcd.ie',
		  'password' => Hash::make('secret'),
		  'active' => '1',
		  'rating' => '5',
		  'acc_type_regular' =>'1'
		));

		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 5; $i++)
		{
		  $user = User::create(array(
		    'username' => $faker->userName,
		    'first_name' => $faker->firstName,
		    'surname' => $faker->lastName,
		    'street' => $faker->streetName,
		    'town' => $faker->streetSuffix,
		    'county' => $faker->city,
		    'country' => $faker->country,
		    'email' => $faker->email,
		    'password' => Hash::make('secret'),
		    'active' => $faker->boolean(),
		    'rating' => $faker->numberBetween(1,5),
		    'acc_type_regular' => $faker->boolean()
		  ));
		}
	}
}

