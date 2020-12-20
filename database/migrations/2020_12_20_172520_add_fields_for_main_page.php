<?php

use App\Models\SystemText;
use App\Models\System;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsForMainPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $m = new SystemText;
        $m->name = 
        $m->text = 
        $m->text_eng = 
        $m->caption = 
        $m->caption_eng = 'main_page';
        $m->save();


        $list = ['main_page_link0','main_page_link1','main_page_link2','main_page_link'];
        for ($i=0;$i<count($list);$i++)
        {
            $m = new System;
            $m->name = $list[$i];
            $m->value = '';
            $m->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $m = SystemText::where('name','main_page');

        if ($m) $m->delete();

        $list = ['main_page_link0','main_page_link1','main_page_link2','main_page_link'];
        for ($i=0;$i<count($list);$i++)
        {
            $m = System::where('name',$list[$i]);

            if ($m) $m->delete();
        }
    }
}
