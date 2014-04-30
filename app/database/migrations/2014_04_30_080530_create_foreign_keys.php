<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('books', function(Blueprint $table) {
			$table->foreign('authors_id')->references('id')->on('authors')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('books', function(Blueprint $table) {
			$table->dropForeign('books_authors_id_foreign');
		});

	}
}