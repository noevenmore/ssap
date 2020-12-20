<?php

use App\Models\SystemText;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInfoInSystemTexts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $list = ['404','how_to_get_airplane','how_to_get_train','how_to_get_bus','how_to_get_car'];
        for ($i=0;$i<count($list);$i++)
        {
            $m = new SystemText;
            $m->name = $list[$i];
            $m->text = $list[$i];
            $m->text_eng = $list[$i];
            $m->caption = $list[$i];
            $m->caption_eng = $list[$i];
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
        $list = ['404','how_to_get_airplane','how_to_get_train','how_to_get_bus','how_to_get_car'];

        for ($i=0;$i<count($list);$i++)
        {
            $m = SystemText::where('name',$list[$i]);

            if ($m) $m->delete();
        }
    }
}
