<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration {

	public function up()
	{
		Schema::create('sliders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('text');
			$table->tinyInteger('type');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('sliders');
	}
}