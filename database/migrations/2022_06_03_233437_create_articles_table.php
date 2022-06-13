<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('short_description');
			$table->longText('description');
			$table->string('image');
			$table->string('status');
            $table->timestamps();

        });
	}

	public function down()
	{
		Schema::drop('articles');
	}
}
