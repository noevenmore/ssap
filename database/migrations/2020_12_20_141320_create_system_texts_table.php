<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_texts', function (Blueprint $table) {
            $table->id();
            $table->string('name',64);
            $table->text('text');
            $table->text('text_eng');
            $table->string('caption',128);
            $table->string('caption_eng',128);
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
        Schema::dropIfExists('system_texts');
    }
}
