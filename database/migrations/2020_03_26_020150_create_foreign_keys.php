<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('libraries', function(Blueprint $table) {
			$table->foreign('library_type_id')->references('id')->on('library_type')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('libraries', function(Blueprint $table) {
			$table->dropForeign('libraries_library_type_id_foreign');
		});
	}
}