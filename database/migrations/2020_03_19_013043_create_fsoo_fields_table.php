<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFsooFieldsTable extends Migration {

	public function up()
	{
		Schema::create('fsoo_fields', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('fsoo_fields');
	}
}