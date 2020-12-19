<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_check')->default(false);
            $table->boolean('is_from_user')->default(false);
            $table->integer('reply_to')->unsigned()->default(0);
            $table->integer('user_id')->unsigned()->default(0);
            $table->integer('data_id')->unsigned()->default(0);
            $table->string('type',64)->default('');
            $table->string('name',128)->default('');
            $table->string('email',128)->default('');
            $table->text('text');
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
        Schema::dropIfExists('comments');
    }
}
