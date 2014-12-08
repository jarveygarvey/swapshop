<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration {

	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image_location');
			$table->integer('listing_id')->unsigned();
			$table->foreign('listing_id')->references('id')->on('listings');
			$table->timestamps();
		});
	}

	public function down()
	{
		// Schema::drop('images');
	}

}
