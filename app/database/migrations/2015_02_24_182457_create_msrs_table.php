<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsrsTable extends Migration {

	const TABLE_NAME = 'msrs';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->string('name', 45);
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
