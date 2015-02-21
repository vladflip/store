<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsrsCategoriesTable extends Migration {

	const TABLE_NAME = 'msrs_categories';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->integer('msr_id')->unsigned();
			$t->integer('category_id')->unsigned();

			$t->primary(array('msr_id', 'category_id'));

			// seller foreign
			$t->foreign('msr_id')->references('id')->on('msrs')
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
