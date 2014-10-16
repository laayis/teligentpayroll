<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccessrightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accessrights', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('userid');
			$table->unsignedInteger('moduleid');
			$table->tinyInteger('tread');
			$table->tinyInteger('tcreate');
			$table->tinyInteger('tupdate');
			$table->tinyInteger('tdelete');
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
		Schema::drop('accessrights');
	}

}
