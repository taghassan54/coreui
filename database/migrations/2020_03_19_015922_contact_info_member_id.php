<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactInfoMemberId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_info', function (Blueprint $table) {
            $table->unsignedInteger('member_id')->nullable();
            $table->foreign('member_id')->references('id')->on('memberships')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_info', function (Blueprint $table) {
            $table->unsignedInteger('member_id')->nullable();
            $table->foreign('member_id')->references('id')->on('memberships')->onDelete('cascade');
        });
    }
}
