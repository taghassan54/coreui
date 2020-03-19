<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqTable extends Migration {

	public function up()
	{
		Schema::create('faq', function(Blueprint $table) {
			$table->increments('id');
			$table->softDeletes();
			$table->text('answer');
			$table->timestamps();
			$table->string('question');
		});
	}

	public function down()
	{
		Schema::drop('faq');
	}
}