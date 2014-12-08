<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {


	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title', 10);
            $table->string('gender',6);
			$table->timestamps();
		});
	}


	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::drop('categories');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}





