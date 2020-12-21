<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToRoutes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('slug',255)->default('');
        });

        Schema::table('excursions', function (Blueprint $table) {
            $table->string('slug',255)->default('');
        });

        Schema::table('hotels', function (Blueprint $table) {
            $table->string('slug',255)->default('');
        });

        Schema::table('texts', function (Blueprint $table) {
            $table->string('slug',255)->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('excursions', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('texts', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
