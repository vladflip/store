<?php

class OrderTest extends TestCase {

	public function testMakeSimpleOrder(){
		$user = new User(['login' => 'fuck', 'token' => 'fuck']);
		$user->save();

		$seller = new Seller(['rating' => 2, 'n_sells' => 2]);
		$seller->user()->associate($user)->save();

		$item = new Item(['price' => 23, 'description' => 23]);
		$item->seller()->associate($seller)->save();

		$order = new Order;

		$order->seller()->associate($seller)
				->customer()->associate($user);

		$order->save();

		$order->items()->attach($item);

		$this->assertEquals(1, $order->customer->id);
	}

}