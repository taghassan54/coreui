<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teames extends Migration
{

    public function up()
	{
		Schema::create('teames', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('position');
			$table->text('aboute');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('teames');
	}

}
