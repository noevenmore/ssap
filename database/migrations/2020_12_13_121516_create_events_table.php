<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            // показывать ли событие?
            $table->boolean('is_show')->default(true);
            // показывать на главной?
            $table->boolean('is_main')->default(false);
            // тип события
            $table->enum('type',['festival','show','concert','sport','conference','other'])->default('other'); 
            // название
            $table->string('name',128);
            // текст описания
            $table->text('text');
            // адресс
            $table->string('addr',256);

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
        Schema::dropIfExists('events');
    }
}
