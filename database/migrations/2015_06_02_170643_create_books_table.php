<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('book_id');
			$table->string('book_name');
			$table->text('description');
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
			$table->string('download_link');
			$table->tinyInteger('show_home_page');
			$table->softDeletes();
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
		Schema::drop('books');
	}

}
