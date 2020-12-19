<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Photo;
use App\Models\Event;
use App\Models\MainPageTitle;
use App\Http\Controllers\MyFunction;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Excursion;
use App\Models\ExcursionFilter;
use App\Models\Filter;
use App\Models\Text;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $main_page_titles = MainPageTitle::get();

        $categorys = Category::where('is_main',true)->get(); 
        $all_events = Event::where(['is_show'=>true,'is_main'=>true])->with('images')->get();
        $events_festivals = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'festival'])->with('images')->get();
        $events_show = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'show'])->with('images')->get();
        $events_concert = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'concert'])->with('images')->get();
        $events_sport = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'sport'])->with('images')->get();
        $events_conference = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'conference'])->with('images')->get();
        $events_other = Event::where(['is_show'=>true,'is_main'=>true,'type'=>'other'])->with('images')->get();

        $excursions = Excursion::where('is_show',true)->with('image_map')->get();

        return view('welcome',compact('main_page_titles','all_events','events_festivals','events_show','events_concert','events_sport','events_conference','events_other','categorys','excursions'));
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

    public function excursion(Request $request,$id)
    {
        $data = Excursion::findOrFail($id);

        $filters = ExcursionFilter::with('how_much')->get();
        $work_times = MyFunction::work_days_to_string($data->work_times);
        $phones = MyFunction::get_phones_from_line($data->phones); 

        $photos = Photo::where(['type'=>'excursion','data_id'=>$id])->orderBy('tag', 'desc')->get();
        $comments = Comment::where(['type'=>'excursion','data_id'=>$id])->orderBy('created_at','desc')->get();

        return view('excursion',compact('data','work_times','phones','photos','filters','comments'));
    }

    public function excursion_list(Request $request)
    {
        $type = $request->input('type');
        $filter = $request->input('filter');
        $sort_by = $request->input('sort_by');
        $text = $request->input('text');

        $filters = ExcursionFilter::with('how_much')->get();
        $data = Excursion::with('image');
        
        if ($filter) $data=$data->where('filter',$filter);
        if ($type) $data=$data->where('type',$type);
        if ($sort_by)$data=$data->orderBy($sort_by,'desc');

        $data=$data->paginate(12);

        if ($filter) $data->appends(['filter'=>$filter]);
        if ($type) $data->appends(['type'=>$type]);
        if ($sort_by)$data->appends(['sort_by'=>$sort_by]);

        return view('excursions_catalog',compact('data','filters','filter','type','sort_by','text'));
    }

    public function excursion_get(Request $request)
    {
        $data=Excursion::get();

        return view('excursion_request');
    }

    public function event_full(Request $request,$id)
    {
        $data = Event::findOrFail($id);

        $photos = Photo::where(['type'=>'event','data_id'=>$id])->orderBy('is_main', 'desc')->get();

        return view('event',compact('data','photos'));
    }

    public function hotel(Request $request,$id)
    {
        $data = Hotel::findOrFail($id);

        $work_times = MyFunction::work_days_to_string($data->work_times);
        $phones = MyFunction::get_phones_from_line($data->phones); 

        $photos = Photo::where(['type'=>'hotel','data_id'=>$id])->orderBy('is_main', 'desc')->get();

        return view('hotel',compact('data','work_times','phones','photos'));
    }


    public function hotel_name(Request $request,$id)
    {
        $data = Hotel::where('type',$id);

        if (!$data)
        {
            return redirect(route('index'));
        }

        $work_times = MyFunction::work_days_to_string($data->work_times);
        $phones = MyFunction::get_phones_from_line($data->phones); 

        $photos = Photo::where(['type'=>'hotel','data_id'=>$id])->orderBy('is_main', 'desc')->get();

        return view('hotel',compact('data','work_times','phones','photos'));
    }

    public function hotel_list(Request $request)
    {
        $type = $request->input('type');
        $filter = $request->input('filter');

        $category = Category::where('link',$type)->first();
        $filters = Filter::where('category_link',$type)->get();

        if ($filter)
        {
            $data = Hotel::where(['type'=>$type,'filter'=>$filter])->with('image')->paginate(12);
            $data->appends(['type'=>$type,'filter'=>$filter]);
        } else
        {
            $data = Hotel::where('type',$type)->with('image')->paginate(12);
            $data->appends(['type'=>$type]);
        }

        return view('hotels_catalog',compact('type','data','category','filters'));
    }

    public function event_list(Request $request)
    {
        $filter = $request->input('filter');

        if ($filter)
        {
            $data = Event::where(['type'=>$filter,'is_show'=>true])->with('image')->paginate(12);
            $data->appends(['type'=>$filter]);
        } else
        {
            $data = Event::where('is_show',true)->with('image')->paginate(12);
        }

        return view('event_catalog',compact('data'));
    }

    public function publishes(Request $request)
    {
        return view('publishes_catalog');
    }

    public function show_text(Request $request,$id)
    {
        $text = Text::findOrFail($id);

        return view('text',compact('text'));
    }
}
