<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableCustomers extends Migration {

	/**
	 * Run the migrations.
	 * Reference http://four.laravel.com/docs/schema
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function($table)
		{
			$bigString = 255;

			$table->string('name', $bigString);
			$table->string('email', $bigString);
			$table->string('reference', $bigString);

			$table->date('birthday')->nullable();
			$table->text('description')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 * Reference http://four.laravel.com/docs/schema
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
		//Schema::dropIfExists('customers');
	}
}
