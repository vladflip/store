<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsMsrsTable extends Migration {

	const TABLE_NAME = 'items_msrs';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->integer('item_id')->unsigned();
			$t->integer('msr_id')->unsigned();
			$t->integer('value')->unsigned();

			$t->primary(array('item_id', 'msr_id'));

			// seller foreign
			$t->foreign('item_id')->references('id')->on('items')
											->onDelete('cascade')
											->onUpdate('no action');

			// category foreign
			$t->foreign('msr_id')->references('id')->on('msrs')
											->onDelete('cascade')
											->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
