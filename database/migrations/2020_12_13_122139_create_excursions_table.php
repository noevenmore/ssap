<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcursionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excursions', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['individual','group'])->default('group');
            // адресс
            $table->string('addr',256);
            // название
            $table->string('name',128);
            // текст описания
            $table->text('text');
            // номера телефонов
            $table->string('phones',128);
            // время работы
            $table->string('work_times',128);
            // ссылка на букинг
            $table->string('blink',256);
            // максимальное количество учасников (0 - не ограниченно)
            $table->integer('max_people')->default(0);
            // цена с человека в грн (0 - не указанно)
            $table->integer('price')->default(0);
            // рейтинг по отзывам пользователей (0.0 - 5.0)
            $table->float('rate')->default(0);
            // популярность, которую ставит админ
            $table->integer('popularity')->default(100);
            // длительность екскурсии в минутах (0 - не указанно)
            $table->integer('length')->default(0);

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
        Schema::dropIfExists('excursions');
    }
}
