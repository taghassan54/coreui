<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactInfoTable extends Migration {

	public function up()
	{
		Schema::create('contact_info', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type');
			$table->string('value');
			$table->softDeletes();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contact_info');
	}
}