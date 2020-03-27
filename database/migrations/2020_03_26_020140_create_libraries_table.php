<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLibrariesTable extends Migration {

	public function up()
	{
		Schema::create('libraries', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('library_type_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('libraries');
	}
}