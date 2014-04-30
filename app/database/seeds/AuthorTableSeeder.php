<?php

class AuthorTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('authors')->delete();

		// one
		Author::create(array(
				'author_first_name' => 'Sepehr',
				'author_last_name' => 'Taheri',
				'books_id' => 1
			));

		// two
		Author::create(array(
				'author_first_name' => 'Sun',
				'author_last_name' => 'Tzu',
				'books_id' => 3
			));

		// three
		Author::create(array(
				'author_first_name' => 'Niccolo',
				'author_last_name' => 'Machiavelli',
				'books_id' => 4
			));
	}
}