<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration {


	public function up()
	{
		Schema::create('listings', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title', 10);
            $table->integer('value');
            $table->string('description',200);
            $table->integer('size');
			$table->boolean('for_sale')->default(1);
			$table->integer('category')->unsigned();
			$table->foreign('category')->references('id')->on('categories');
			$table->integer('posted_by')->unsigned();
			$table->foreign('posted_by')->references('id')->on('users');
			$table->timestamps();
		});
	}

	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::drop('listings');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
