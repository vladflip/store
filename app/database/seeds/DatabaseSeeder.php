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


		$this->call('MeasuresSeeder');

		$this->call('CategoriesSeeder');

		$this->call('UsersSeeder');

		$this->call('SellersSeeder');

		$this->call('ItemsSeeder');

		$this->call('OrdersSeeder');

	}

}

class FF {
	public static function get() {
		return Faker\Factory::create();
	}
}

class MeasuresSeeder extends Seeder {

	public function run() {

		Measure::create(['name' => 'плечи']);
		Measure::create(['name' => 'подмышки']);
		Measure::create(['name' => 'рукава']);
		Measure::create(['name' => 'полупояс']);
		Measure::create(['name' => 'ширина']);

	}

}

class CategoriesSeeder extends Seeder {

	public function run() {
		if( ! DB::table('categories')->first())
			Category::seedMe();

		// Category::whereName('верх') TODOOOOOO MSRS_CATEGORIES
	}

}

class UsersSeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for ($i=0; $i < 10; $i++) { 

			User::create([
					'login' => $f->userName, 
					'token' => 'fuck'
				]);

		}
	}

}

class SellersSeeder extends Seeder {

	public function run() {

		$cats = Category::root()->leaves()->get();

		for ($i=0; $i < 10; $i++) { 
			
			$s = Seller::create([
					'rating' => 2, 
					'n_sells' => 2,
					'user_id' => $i+1
				]);

			$s->categories()->attach($cats[$i]);

			$s->save();

		}

	}

}

class ItemsSeeder extends Seeder {

	public function run() {

		$f = FF::get();

		for ($i=0; $i < 10; $i++) { 
			
			Item::create([
				'price' => $f->randomNumber(3),
				'seller_id' => $i+1, 
				'description' => $f->text,
				'category_id' => $f->numberBetween(1, 8),
				'main_pic' => $f->imageUrl(),
				'views' => $f->randomDigit,
				'rate' => $f->randomDigit,
				'length' => $f->numberBetween(50, 100),
				'sex' => $f->numberBetween(0, 1)
			]);

		}

	}

	/*	TODO ITEMS_MSRS 
	 *	select measures from msrs_categories by category_id in item
	 *	set this categories to items_msrs with random value
	*/

}

class OrdersSeeder extends Seeder {

	public function run() {

		for ($i=0; $i < 10; $i++) { 
			
			$o = Order::create([
				'seller_id' => $i+1,
				'user_id' => $i+1 
			]);

			$item = Item::find($i+1);

			$o->items()->attach($item);

			$o->save();

		}

	}

}