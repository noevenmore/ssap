<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Photo;
use App\Models\Event;
use App\Models\MainPageTitle;
use App\Http\Controllers\MyFunction;

use function PHPSTORM_META\type;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $main_page_titles = MainPageTitle::get();

        $all_events = Event::where(['is_show'=>true,'is_main'=>true])->with('images')->get();
        $events_festivals = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'festival'])->with('images')->get();
        $events_show = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'show'])->with('images')->get();
        $events_concert = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'concert'])->with('images')->get();
        $events_sport = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'sport'])->with('images')->get();
        $events_conference = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'conference'])->with('images')->get();
        $events_other = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'other'])->with('images')->get();

        return view('welcome',compact('main_page_titles','all_events','events_festivals','events_show','events_concert','events_sport','events_conference','events_other'));
    }

    public function search(Request $request)
    {
        return view('welcome');
    }

    public function photogallery(Request $request)
    {
        $tag = $request->input('tag');

        $data=Photo::where('type','gallery');

        if ($tag)
        {
            $data = $data->where('tag',$tag);
        }

        $data=$data->paginate(12);

        return view('photogallery',compact('data'));
    }

    public function excursion(Request $request)
    {
        return view('excursion');
    }

    public function excursion_list(Request $request)
    {
        return view('excursions_catalog');
    }

    public function hotel(Request $request,$id)
    {
        $data = Hotel::findOrFail($id);

        $work_times = MyFunction::work_days_to_string($data->work_times);
        $phones = MyFunction::get_phones_from_line($data->phones); 

        $photos = Photo::where(['type'=>'hotel','data_id'=>$id])->orderBy('is_main', 'desc')->get();

        return view('hotel',compact('data','work_times','phones','photos'));
    }

    public function hotel_list(Request $request)
    {
        $type = $request->input('type');
        $data = Hotel::where('type',$type)->with('image')->paginate(12);

        return view('hotels_catalog',compact('type','data'));
    }

    public function publishes(Request $request)
    {
        return view('publishes_catalog');
    }
}
