<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateObligationsTable extends Migration {

	public function up()
	{
		Schema::create('obligations', function(Blueprint $table) {
			$table->increments('id');
			$table->string('full_name');
			$table->string('national_number')->unique();
			$table->boolean('obligation_accept');
			$table->string('number')->unique();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('obligations');
	}
}
