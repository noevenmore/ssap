<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            // цена
            $table->integer('price')->default(0);
            // длительность в минутах
            $table->integer('length')->default(0);
            // дата начала
            $table->timestamp('start')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events',function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('length');
            $table->dropColumn('start');
        });
    }
}
