<?php

class CategorySeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		DB::table('categories')->delete();

		$categories = Categories::create(array(
		  'id' => '1',
		  'title' => 'Dress',
		  'gender' => 'Female'
		));

		$categories = Categories::create(array(
		  'id' => '2',
		  'title' =>'Top',
		  'gender' =>'Female'
		));

		$categories = Categories::create(array(
		  'id' => '3',
		  'title' =>'Shirt',
		  'gender' =>'Female'
		));

		$categories = Categories::create(array(
		  'id' => '4',
		  'title' =>'Skirt',
		  'gender' =>'Female'
		));

		$categories = Categories::create(array(
		  'id' => '5',
		  'title' =>'Shorts',
		  'gender' =>'Female'
		));

		$categories = Categories::create(array(
		  'id' => '6',
		  'title' =>'Trousers',
		  'gender' =>'Female'
		));

		$categories = Categories::create(array(
		  'id' => '7',
		  'title' =>'Sweaters',
		  'gender' =>'Female'
		));

		$categories = Categories::create(array(
		  'id' => '8',
		  'title' =>'Outerwear',
		  'gender' =>'Female'
		));

		$categories = Categories::create(array(
		  'id' => '9',
		  'title' => 'Accessories',
		  'gender' => 'Female'
		));

		$categories = Categories::create(array(
		  'id' => '10',
		  'title' => 'Shoes',
		  'gender' => 'Female'
		));

		$categories = Categories::create(array(
		  'id' => '11',
		  'title' =>'Top',
		  'gender' =>'Male'
		));

		$categories = Categories::create(array(
		  'id' => '12',
		  'title' =>'Shirt',
		  'gender' =>'Male'
		));

		$categories = Categories::create(array(
		  'id' => '13',
		  'title' =>'Shorts',
		  'gender' =>'Male'
		));

		$categories = Categories::create(array(
		  'id' => '14',
		  'title' =>'Trousers',
		  'gender' =>'Male'
		));

		$categories = Categories::create(array(
		  'id' => '15',
		  'title' =>'Sweaters',
		  'gender' =>'Male'
		));

		$categories = Categories::create(array(
		  'id' => '16',
		  'title' =>'Outerwear',
		  'gender' =>'Male'
		));

		$categories = Categories::create(array(
		  'id' => '17',
		  'title' => 'Accessories',
		  'gender' => 'Male'
		));

		$categories = Categories::create(array(
		  'id' => '18',
		  'title' => 'Shoes',
		  'gender' => 'Male'
		));
	}
}
