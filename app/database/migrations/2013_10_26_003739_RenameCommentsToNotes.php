<?php

use Illuminate\Database\Migrations\Migration;

class RenameCommentsToNotes extends Migration {
	/**
	 * Run the migrations.
	 * Reference http://four.laravel.com/docs/schema
	 *
	 * @return void
	 */
	public function up()
	{
		$from = "comments";
		$to = "notes";

		Schema::rename($from, $to);
	}

	/**
	 * Reverse the migrations.
	 * Reference http://four.laravel.com/docs/schema
	 *
	 * @return void
	 */
	public function down()
	{
		$from = "notes";
		$to = "comments";

		Schema::rename($from, $to);
	}
}