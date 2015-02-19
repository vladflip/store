<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemsTable extends Migration {

	const TABLE_NAME = 'order_items';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->integer('item_id')->unsigned();
			$t->integer('order_id')->unsigned();

			// item foreign
			$t->foreign('item_id')->references('id')->on('items')
											->onDelete('cascade')
											->onUpdate('no action');

			// order foreign
			$t->foreign('order_id')->references('id')->on('orders')
											->onDelete('cascade')
											->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
