<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthorsTable extends Migration {

	public function up()
	{
		Schema::create('authors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('author_first_name', 255);
			$table->string('author_last_name', 255);
			$table->integer('books_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('authors');
	}
}