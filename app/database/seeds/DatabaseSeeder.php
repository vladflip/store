<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}

class CategorySeeder extends Seeder {

	public function run(){
		new Category([
				'name' => 'top',
				'lft' => 
			])
	}
}
