<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGalleryTable extends Migration {

	public function up()
	{
		Schema::create('galleries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('type');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('galleries');
	}
}
