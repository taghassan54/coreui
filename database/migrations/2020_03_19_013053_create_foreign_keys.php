<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('memberships', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->foreign('age_range_id')->references('id')->on('age_ranges')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->foreign('nationality_id')->references('id')->on('nationalities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->foreign('specialization_id')->references('id')->on('specializations')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->foreign('university_id')->references('id')->on('universities')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('memberships', function(Blueprint $table) {
			$table->dropForeign('memberships_country_id_foreign');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->dropForeign('memberships_age_range_id_foreign');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->dropForeign('memberships_nationality_id_foreign');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->dropForeign('memberships_city_id_foreign');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->dropForeign('memberships_specialization_id_foreign');
		});
		Schema::table('memberships', function(Blueprint $table) {
			$table->dropForeign('memberships_university_id_foreign');
		});
	}
}