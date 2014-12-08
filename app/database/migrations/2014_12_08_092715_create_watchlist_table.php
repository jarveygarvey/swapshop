<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchlistTable extends Migration {


	public function up()
	{
		Schema::create('watchlist', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('listing_id')->unsigned();
			$table->foreign('listing_id')->references('id')->on('listings');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('watchlist');
	}

}
