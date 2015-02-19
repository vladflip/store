<?php

class UserTest extends TestCase {

	public function testUserSellerRelation(){
		$user = new User(['login' => 'fuck', 'token' => 'fuck']);
		$user->save();

		// save user to get its id and associate with seller
		$this->assertEquals($user->id, 1);

		$seller = new Seller(['rating' => 2, 'n_sells' => 2]);

		// associate user to seller
		$seller->user()->associate($user);

	}

}