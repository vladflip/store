<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	const TABLE_NAME = 'users'; 

	public function up()
	{
		Schema::create(self::TABLE_NAME, function($t){
			$t->increments('id');

			$t->string('login', 45);
			$t->string('token', 100);
		});
	}

	public function down()
	{
		Schema::drop(self::TABLE_NAME);
	}

}
