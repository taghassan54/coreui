<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgeRangesTable extends Migration {

	public function up()
	{
		Schema::create('age_ranges', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('age_ranges');
	}
}