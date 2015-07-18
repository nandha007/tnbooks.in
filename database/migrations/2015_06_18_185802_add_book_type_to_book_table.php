<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBookTypeToBookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books', function(Blueprint $table)
		{
			$table->string('book_slug')->unique()->after('book_id');
			$table->integer('book_type_id')->unsigned()->after('discount_qty')->references('book_type_id')->on('book_types')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('books', function(Blueprint $table)
		{
			$table->dropColumn(['book_type_id', 'book_slug']);
		});
	}

}
