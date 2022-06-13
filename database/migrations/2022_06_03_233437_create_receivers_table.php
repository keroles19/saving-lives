<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReceiversTable extends Migration {

	public function up()
	{
		Schema::create('receivers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('full_name');
			$table->string('email')->unique();
			$table->string('phone');
			$table->string('address');
			$table->bigInteger('national_number')->unique();
			$table->enum('blood_type', array('A', 'A+', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'));
			$table->string('files')->nullable();
			$table->string('description')->nullable();
			$table->timestamps();
			$table->tinyInteger('status')->default('1');
			$table->integer('hospital_id')->unsigned()->nullable();
			$table->integer('donor_id')->unsigned()->nullable();
			$table->integer('organ_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('receivers');
	}
}
