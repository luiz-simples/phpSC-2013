<?php

use Illuminate\Database\Migrations\Migration;

class CreateTableComments extends Migration {
	/**
	 * Run the migrations.
	 * Reference http://four.laravel.com/docs/schema
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function($table)
		{
			$notChecked = false;

			$table->timestamps(); //Adds created_at and updated_at columns

			$table->text('description')->nullable();
			$table->boolean('checked')->default($notChecked);
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
		Schema::drop('comments');
	}
}
