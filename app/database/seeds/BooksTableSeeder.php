<?php

class BooksTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('books')->delete();
		// one
		Books::create(array(
				'book_title' => 'Art of Coding',
				'book_description' => 'A great guide to learn to code!',
				'ISBN' => 122412451231,
				'date_published' => '2001-12-31',
				'authors_id' => 1
			));

		// two
		Books::create(array(
				'book_title' => 'Chelsea FC: Defence Done Right',
				'book_description' => 'A guide to how Jose Mourinho has built the best side anti-football side ever',
				'ISBN' => 12412421442,
				'date_published' => '2014-10-31',
				'authors_id' => 1
			));

		// three
		Books::create(array(
				'book_title' => 'Art of War',
				'book_description' => 'The historical tacticians handbook on how to master conflicts of any kind',
				'ISBN' => 1421421523423,
				'date_published' => '1000-12-31',
				'authors_id' => 2
			));

		// four
		Books::create(array(
				'book_title' => 'The Prince',
				'book_description' => 'The guide on how to rule and control princedoms',
				'ISBN' => 1241243213,
				'date_published' => '1640-12-31',
				'authors_id' => 3
			));
	}
}