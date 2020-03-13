<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProgrammsAndServicesTable extends Migration {

	public function up()
	{
		Schema::create('programms_and_services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title');
			$table->text('text');
		});
	}

	public function down()
	{
		Schema::drop('programms_and_services');
	}
}