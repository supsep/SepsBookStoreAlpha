<?php

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		$this->call('AuthorTableSeeder');
		$this->command->info('Author table seeded!');
		
		$this->call('BooksTableSeeder');
		$this->command->info('Books table seeded!');


	}
}