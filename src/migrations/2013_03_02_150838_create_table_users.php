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
			$table->string('first_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('post_name')->nullable();
			$table->string('full_name')->nullable()->index();
			$table->string('email')->unique();
			$table->string('username')->nullable();
			$table->string('password');
			$table->string('activation_hash')->nullable();
			$table->string('remember_me')->nullable();
			$table->string('twitter_uid')->nullable();
			$table->string('twitter_token')->nullable();
			$table->string('twitter_token_secret')->nullable();
			$table->string('linkedin_uid')->nullable();
			$table->string('linkedin_token')->nullable();
			$table->string('linkedin_token_secret')->nullable();
			$table->string('facebook_uid')->nullable();
			$table->string('facebook_token')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->integer('zip')->nullable()->unsigned();
			$table->string('country')->nullable();
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