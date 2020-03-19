<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperienceTable extends Migration {

	public function up()
	{
		Schema::create('experience', function(Blueprint $table) {
			$table->increments('id');
			$table->string('job_title');
			$table->date('from');
			$table->date('to')->nullable();
			$table->string('workplace');
			$table->string('email');
            $table->string('phone')->nullable();

			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('experience');
	}
}
