<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username',20);
			$table->string('first_name',20);
			$table->string('surname',20);
			$table->string('street',20);
			$table->string('town',20);
			$table->string('county',10);
			$table->string('country',20);
			$table->string('email',20);
			$table->string('password',10);
			$table->boolean('active')->default(0);
			$table->integer('rating');
			$table->boolean('acc_type_regular')->default(1);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
