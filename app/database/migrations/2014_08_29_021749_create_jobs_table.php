<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->text('content');
			$table->timestamp('lastdate');
			$table->string('category');
			$table->string('type');
			$table->string('contract_type');
			$table->string('expected_sal');
			$table->string('location');
			$table->string('skills');
			$table->string('company');
			$table->string('company_logo');
			$table->text('how_to_apply');
			$table->integer('user_id');
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
		Schema::drop('jobs');
	}

}
