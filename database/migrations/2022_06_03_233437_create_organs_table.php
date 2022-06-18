<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrgansTable extends Migration {

	public function up()
	{
		Schema::create('organs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('organ_name');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('organs');
	}
}
