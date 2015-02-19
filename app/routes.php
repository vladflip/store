<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// return View::make('hello');

	// $user = new User(['login' => 'fuck', 'token' => 'fuck']);
	// $user->save();

	// $seller = new Seller(['rating' => 2, 'n_sells' => 2]);
	// $seller->user()->associate($user)->save();

	// $item = new Item(['price' => 23, 'description' => 23]);
	// $item->seller()->associate($seller)->save();

	// echo '<pre>';
	// print_r(Seller::with('user', 'items')->get()->toArray());

	// echo Item::with('seller')->get();

	// echo User::all();

	// $order = new Order;

	// $order->seller()->associate(Seller::find(1))->customer()->associate(User::find(1));

	// $order->save();

	// echo '<pre>';
	// print_r(Order::with('seller', 'customer')->find(1)->toArray());

	// $order = Order::find(1);

	// $order->items()->attach(Item::find(1));

	// echo Order::with('items')->get();

	Category::get();
});
