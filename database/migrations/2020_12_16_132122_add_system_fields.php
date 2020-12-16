<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\MyFunction;

use App\Models\System;

class AddSystemFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = ['usd','eur','weather_day0','weather_day1','weather_night0','weather_night1','facebook','instagram','telegram'];
        for ($i=0;$i<count($list);$i++)
        {
            $m = new System;
            $m->name = $list[$i];
            $m->value = '0';
            $m->save();
        }

        MyFunction::get_money_rate();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $list = ['usd','eur','weather_day0','weather_day1','weather_night0','weather_night1','facebook','instagram','telegram'];
        for ($i=0;$i<count($list);$i++)
        {
            $m = System::where('name',$list[$i]);

            if ($m) $m->delete();
        }
    }
}
