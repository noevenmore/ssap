<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainPageTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_page_titles', function (Blueprint $table) {
            $table->id();
            $table->string('label0',128);
            $table->string('label1',128);
            $table->string('label2',128);
            $table->text('text');

            $table->string('label0_eng',128);
            $table->string('label1_eng',128);
            $table->string('label2_eng',128);
            $table->text('text_eng');

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
        Schema::dropIfExists('main_page_titles');
    }
}
