<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFooterTable extends Migration {

	public function up()
	{
		Schema::create('footer', function(Blueprint $table) {
			$table->increments('id');
			$table->string('address');
			$table->string('email');
			$table->string('phone');
			$table->string('fax');
			$table->string('lang');
			$table->string('lat');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('footer');
	}
}