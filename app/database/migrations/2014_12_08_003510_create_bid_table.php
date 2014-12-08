<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidTable extends Migration {

	public function up()
	{
		Schema::create('bids', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('description',200);
            $table->integer('listing_id')->unsigned();
			$table->foreign('listing_id')->references('id')->on('listings');
			$table->integer('bidder')->unsigned();
			$table->foreign('bidder')->references('id')->on('users');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('bids');
	}

}
