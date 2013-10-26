<?php

use Illuminate\Database\Migrations\Migration;

class AddCustomerIdToNotes extends Migration {
	/**
	 * Run the migrations.
	 * Reference http://four.laravel.com/docs/schema
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('notes', function($table)
		{
			$table->integer('customer_id')->unsigned();
			$table->foreign('customer_id')->references('id')->on('customers');
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
		$table->dropForeign('customer_id');
		$table->dropColumn('customer_id');
	}
}
