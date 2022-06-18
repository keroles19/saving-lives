<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDonorsTable extends Migration {

	public function up()
	{
		Schema::create('donors', function(Blueprint $table) {
			$table->increments('id');
			$table->string('full_name');
			$table->string('email')->unique();
			$table->string('phone');
			$table->string('address')->nullable();
			$table->bigInteger('national_number')->unique();
			$table->enum('blood_type', array('A', 'A+', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'));
			$table->string('description')->nullable();
//			$table->string('files')->nullable();
			$table->tinyInteger('status')->default('1');
			$table->integer('organ_id')->unsigned();
			$table->integer('hospital_id')->unsigned()->nullable();
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('donors');
	}
}
