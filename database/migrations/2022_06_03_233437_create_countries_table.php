<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTable extends Migration {

	public function up()
	{
		Schema::create('countries', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('country_name');
		});
	}

	public function down()
	{
		Schema::drop('countries');
	}
}