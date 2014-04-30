<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	public function up()
	{
		Schema::create('books', function(Blueprint $table) {
			$table->increments('id');
			$table->string('book_title', 255);
			$table->text('book_description');
			$table->bigInteger('ISBN');
			$table->date('date_published');
			$table->integer('authors_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('books');
	}
}