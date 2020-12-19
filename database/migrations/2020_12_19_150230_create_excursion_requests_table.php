<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcursionRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excursion_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('excursion_id')->unsigned()->default(0);
            $table->string('name',128);
            $table->string('email',128);
            $table->string('phone',64);
            $table->string('date',64);
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
        Schema::dropIfExists('excursion_requests');
    }
}
