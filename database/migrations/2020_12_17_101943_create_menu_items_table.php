<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->string('name',128);
            $table->string('name_eng',128);
            $table->boolean('is_main')->default(false);
            $table->integer('category_id')->unsigned()->default(0);
            $table->integer('filter_id')->unsigned()->default(0);
            $table->integer('position')->unsigned()->default(0);

            $table->integer('parent_id')->unsigned()->default(0);

            $table->integer('text_id')->unsigned()->default(0);
            $table->string('link_type')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
}
