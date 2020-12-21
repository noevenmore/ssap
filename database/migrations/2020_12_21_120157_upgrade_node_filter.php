<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpgradeNodeFilter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('filters', function (Blueprint $table) {
            $table->boolean('is_redirect_one')->default(false);
            $table->boolean('is_show_phones')->default(true);
            $table->boolean('is_show_worktimes')->default(true);
        });

        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('filters', function (Blueprint $table) {
            $table->dropColumn('is_redirect_one');
            $table->dropColumn('is_show_phones');
            $table->dropColumn('is_show_worktimes');
        });
    }
}
