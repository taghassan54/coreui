<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrivacyPolicyTable extends Migration {

	public function up()
	{
		Schema::create('privacy_policy', function(Blueprint $table) {
			$table->increments('id');
			$table->string('privacy_policy');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('privacy_policy');
	}
}