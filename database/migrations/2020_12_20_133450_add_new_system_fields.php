<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\System;

class AddNewSystemFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $m = new System;
        $m->name = 'email';
        $m->value = 'info@kroptravel.gov.ua';
        $m->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $m = System::where('name','email');

        if ($m) $m->delete();
    }
}
