<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateExcursionRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('excursion_requests', function (Blueprint $table) {
            $table->boolean('is_check')->default(false);
            $table->integer('people_count')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('excursion_requests', function (Blueprint $table) {
            $table->dropColumn('is_check');
            $table->dropColumn('people_count');
        });
    }
}
