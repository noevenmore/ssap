<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            // где будет использоватся фото
            $table->enum('type',['hotel','event','gallery','excursion','etc'])->default('etc'); 
            // главная фотка? (например будет на заставке отеля)
            $table->boolean('is_main')->default(false);
            // тег для фотогалереи
            $table->string('tag','32')->default('');
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
        Schema::dropIfExists('photos');
    }
}
