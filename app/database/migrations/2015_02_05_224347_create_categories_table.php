<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	const TABLE_NAME = 'categories';

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->string('name', 30);
			$t->smallInteger('lft');
			$t->smallInteger('rgt');
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
