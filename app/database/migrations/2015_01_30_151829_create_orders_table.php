<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	const TABLE_NAME = 'orders';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->integer('seller_id')->unsigned();
			$t->integer('user_id')->unsigned();

			// seller foreign
			$t->foreign('seller_id')->references('id')->on('sellers')
											->onDelete('cascade')
											->onUpdate('no action');

			// user foreign
			$t->foreign('user_id')->references('id')->on('users')
											->onDelete('cascade')
											->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
