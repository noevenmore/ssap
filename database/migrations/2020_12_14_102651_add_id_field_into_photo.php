<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdFieldIntoPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('photos',function (Blueprint $table) {
            $table->string('src',64);
            $table->integer('data_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photos',function (Blueprint $table) {
            $table->dropColumn('src');
            $table->dropColumn('data_id');
        });
    }
}
