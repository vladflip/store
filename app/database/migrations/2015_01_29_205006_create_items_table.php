<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	const TABLE_NAME = 'items';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->integer('price')->unsigned();
			$t->integer('firm_id')->default(0);				// todo
			$t->integer('seller_id')->unsigned();
			$t->text('description')->nullable();
			$t->integer('category_id')->default(0);					// todo
			$t->integer('delivery_id')->default(0);					// todo
			$t->string('main_pic', 255)->nullable();
			$t->integer('views')->nullable();
			$t->integer('rate')->nullable();

			// seller foreign
			$t->foreign('seller_id')->references('id')->on('sellers')
											->onDelete('cascade')
											->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
