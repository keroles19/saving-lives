<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrgansTable extends Migration {

	public function up()
	{
		Schema::create('organs', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('organ_name');
		});
	}

	public function down()
	{
		Schema::drop('organs');
	}
}