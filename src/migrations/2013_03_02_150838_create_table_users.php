<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('pre_name')->nullable();
			$table->string('first_name');
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('post_name')->nullable();
			$table->string('username')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->integer('zip')->nullable();
			$table->float('lat')->nullable();
			$table->float('lng')->nullable();
			$table->boolean('activated');
			$table->boolean('status');
			$table->datetime('last_login')->nullable();
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
		Schema::dropIfExists('users');
	}

}