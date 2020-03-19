<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembershipsTable extends Migration {

	public function up()
	{
		Schema::create('memberships', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('country_id')->unsigned();
			$table->string('name');
			$table->string('gender');
			$table->integer('age_range_id')->unsigned();
			$table->integer('nationality_id')->unsigned();
			$table->integer('city_id')->unsigned();
			$table->string('district');
			$table->string('block');
			$table->date('graduation_date');
			$table->integer('specialization_id')->unsigned();
			$table->integer('university_id')->unsigned();
			$table->text('comments');
			$table->text('Services_you_like_to_participate')->nullable();
			$table->text('other_memberships');
		});
	}

	public function down()
	{
		Schema::drop('memberships');
	}
}