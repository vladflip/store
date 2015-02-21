<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerCategoriesTable extends Migration {

	const TABLE_NAME = 'seller_categories';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->integer('seller_id')->unsigned();
			$t->integer('category_id')->unsigned();

			$t->primary(array('seller_id', 'category_id'));

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
