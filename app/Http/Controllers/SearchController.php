<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Excursion;
use App\Models\Hotel;
use App\Models\Search;
use App\Models\Text;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    // d - model of hotel or excursion or event
    public static function DoSave($type,$d)
    {
        $sm = Search::firstOrCreate(['type'=>$type,'data_id'=>$d->id]);
        $sm->type = $type;
        $sm->data_id = $d->id;
        $sm->name = $d->name;
        $sm->name_eng = $d->name_eng;
        $sm->text = $d->text;
        $sm->text_eng = $d->text_eng;
        $sm->save();
    }

    public static function DoDelete($type,$d)
    {
        $sm = Search::where(['type'=>$type,'data_id'=>$d->id])->first();

        if ($sm)
        {
            $sm->delete();
        }
    }

    public function Recalculate(Request $request)
    {
        $events = Event::cursor();
        foreach ($events as $d)
        {
            $this->DoSave('event',$d);
        }

        $hotels = Hotel::cursor();
        foreach ($hotels as $d)
        {
            $this->DoSave('node',$d);
        }

        $excursions = Excursion::cursor();
        foreach ($excursions as $d)
        {
            $this->DoSave('excursion',$d);
        }

        $texts = Text::cursor();
        foreach ($texts as $d)
        {
            $this->DoSave('text',$d);
        }

        return 'done';
    }
}
