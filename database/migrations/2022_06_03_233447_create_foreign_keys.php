<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('hospitals', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('donors', function(Blueprint $table) {
			$table->foreign('organ_id')->references('id')->on('organs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('donors', function(Blueprint $table) {
			$table->foreign('hospital_id')->references('id')->on('hospitals')
						->onDelete('set null')
						->onUpdate('cascade');
		});
		Schema::table('receivers', function(Blueprint $table) {
			$table->foreign('hospital_id')->references('id')->on('hospitals')
						->onDelete('set null')
						->onUpdate('cascade');
		});
		Schema::table('receivers', function(Blueprint $table) {
			$table->foreign('donor_id')->references('id')->on('donors')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('receivers', function(Blueprint $table) {
			$table->foreign('organ_id')->references('id')->on('organs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('hospitals', function(Blueprint $table) {
			$table->dropForeign('hospitals_country_id_foreign');
		});
		Schema::table('donors', function(Blueprint $table) {
			$table->dropForeign('donors_organ_id_foreign');
		});
		Schema::table('donors', function(Blueprint $table) {
			$table->dropForeign('donors_hospital_id_foreign');
		});
		Schema::table('receivers', function(Blueprint $table) {
			$table->dropForeign('receivers_hospital_id_foreign');
		});
		Schema::table('receivers', function(Blueprint $table) {
			$table->dropForeign('receivers_donor_id_foreign');
		});
		Schema::table('receivers', function(Blueprint $table) {
			$table->dropForeign('receivers_organ_id_foreign');
		});
	}
}
