<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnglishFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('name_eng',128);
            $table->text('text_eng');
            $table->string('addr_eng',256);
        });

        Schema::table('events', function (Blueprint $table) {
            $table->string('name_eng',128);
            $table->text('text_eng');
            $table->string('addr_eng',256);
        });

        Schema::table('excursions', function (Blueprint $table) {
            $table->string('name_eng',128);
            $table->text('text_eng');
            $table->string('addr_eng',256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotels',function (Blueprint $table) {
            $table->dropColumn('name_eng');
            $table->dropColumn('text_eng');
            $table->dropColumn('addr_eng');
        });

        Schema::table('events',function (Blueprint $table) {
            $table->dropColumn('name_eng');
            $table->dropColumn('text_eng');
            $table->dropColumn('addr_eng');
        });

        Schema::table('excursions',function (Blueprint $table) {
            $table->dropColumn('name_eng');
            $table->dropColumn('text_eng');
            $table->dropColumn('addr_eng');
        });
    }
}
