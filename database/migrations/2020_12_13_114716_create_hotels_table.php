<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            // название
            $table->string('name',128);
            // текст описания
            $table->text('text');
            // адресс
            $table->string('addr',256);
            // ссылка на букинг
            $table->string('blink',256);
            // номера телефонов
            $table->string('phones',128);
            // время работы
            $table->string('work_times',128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
