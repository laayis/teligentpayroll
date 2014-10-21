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
			$table->tinyInteger('isadmin');
			$table->tinyInteger('isnew')->default(1);
			$table->string('status'); // active || inactive || block;
			$table->string('username',30);
			$table->string('password');
			$table->string('lastname',100);
			$table->string('firstname',100);
			$table->string('position',100);
			$table->string('contactno',100);
			$table->string('email',100);
			$table->string('userpic',100);
			$table->string('remember_token',64)->nullable();
			$table->unsignedInteger('created_by');
			$table->unsignedInteger('modified_by');
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
