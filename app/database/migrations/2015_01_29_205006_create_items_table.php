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
			$t->integer('firm_id')->unsigned();				// todo
			$t->integer('seller_id')->unsigned();
			$t->text('description')->nullable();
			$t->integer('category_id')->unsigned();					// done
			$t->integer('delivery_id')->unsigned();					// todo
			$t->string('main_pic', 255)->nullable();
			$t->integer('views')->nullable();
			$t->integer('rate')->nullable();
			$t->integer('length')->nullable();
			$t->boolean('sex')->nullable();

			// seller foreign
			$t->foreign('seller_id')->references('id')->on('sellers')
											->onDelete('cascade')
											->onUpdate('no action');

			// category foreign
			$t->foreign('category_id')->references('id')->on('categories')
											->onDelete('cascade')
											->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
