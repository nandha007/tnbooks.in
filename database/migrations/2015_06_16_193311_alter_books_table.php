<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('books', function(Blueprint $table)
		{
			$table->string('author')->after('book_name');
			$table->string('publication')->after('author');
			$table->decimal('rate', 5,2)->after('description');
			$table->decimal('discount', 5,2)->after('rate');
			$table->integer('discount_qty')->after('discount');
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
			$table->dropColumn(['author', 'publication', 'rate', 'discount', 'discount_qty']);
		});
	}

}
