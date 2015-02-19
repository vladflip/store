<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration {

	const TABLE_NAME = 'sellers';
	
	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');
			$t->integer('user_id')->unsigned();
			$t->integer('rating');
			$t->integer('n_sells');

			$t->unique('user_id');
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
