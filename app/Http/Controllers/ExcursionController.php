<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Excursion;
use App\Models\ExcursionFilter;
use App\Http\Controllers\SearchController;

class ExcursionController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('admin');
    }

    public function save_event_from_request($event,Request $request)
    {
        $ind = $request->input('is_individual','');

        if ($ind)
        {
            $event->type='individual';
        } else
        {
            $event->type='group';
        }
        
        $event->name=$request->input('name','no_name');
        if (!$event->name) $event->name = 'no_name';

        $event->text=$request->input('text','');
        if (!$event->text) $event->text = '';

        $event->addr=$request->input('addr','');
        if (!$event->addr) $event->addr = '';

        $event->name_eng=$request->input('name_eng','no_name');
        if (!$event->name_eng) $event->name_eng = 'no_name';

        $event->text_eng=$request->input('text_eng','');
        if (!$event->text_eng) $event->text_eng = '';

        $event->addr_eng=$request->input('addr_eng','');
        if (!$event->addr_eng) $event->addr_eng = '';

        $event->length=$request->input('length','0');
        if (!$event->length) $event->length = 0;

        $event->price=$request->input('price','0');
        if (!$event->price) $event->price = 0;

        $event->rate=$request->input('rate','0');
        if (!$event->rate) $event->rate = 0;

        $event->popularity=$request->input('popularity','0');
        if (!$event->popularity) $event->popularity = 0;

        $event->max_people=$request->input('max_people','0');
        if (!$event->max_people) $event->max_people = 0;

        $event->blink=$request->input('blink','');
        if (!$event->blink) $event->blink = '';

        $event->phones=$request->input('phones','');
        if (!$event->phones) $event->phones = '';

        $event->filter=$request->input('filter','');
        if (!$event->filter) $event->filter = '';

        $event->admin_email=$request->input('admin_email','');
        if (!$event->admin_email) $event->admin_email = '';

        $event->is_show=$request->input('is_show');
        if ($event->is_show==null) $event->is_show=false;
        
        $event->work_times=MyFunction::work_days_from_request($request);

        $event->slug = str_slug($event->name);

        $event->save();

        PhotoController::publish_images($event->id,'excursion');
        SearchController::DoSave('excursion',$event);
    }

    public function event_add(Request $request)
    {
        $filters=ExcursionFilter::get();
        $photos=Photo::where(['type'=>'excursion','data_id'=>0,'tag'=>''])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.excursion_add',compact('images_list','filters'));
    }

    public function event_add_post(Request $request)
    {
        $data = new Excursion;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_excursion_show'));
    }

    public function event_edit(Request $request,$id)
    {
        $data = Excursion::where('id',$id)->first();

        if (!$data) return redirect(404);

        $filters=ExcursionFilter::get();
        $photos=Photo::where(['type'=>'excursion','data_id'=>$id,'tag'=>''])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.excursion_edit',compact('data','images_list','filters'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Excursion::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found excursion with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_excursion_show'));
    }

    public function event_show(Request $request)
    {
        $data = Excursion::paginate(10);

        return view('admin.excursion_show',compact('data'));
    }

    public function event_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Excursion::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found excursion with id '.$event_id]);
        }

        PhotoController::delete_images_with_type_and_id('excursion',$event_id);
        SearchController::DoDelete('excursion',$data);

        $data->delete();

        return json_encode(['success'=>true]);
    }




    public function event_map_edit(Request $request,$id)
    {
        $data = Excursion::where('id',$id)->first();

        if (!$data) return redirect(404);

        $photos=Photo::where(['type'=>'excursion','data_id'=>$id,'tag'=>'map'])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.excursion_map_edit',compact('data','images_list'));
    }

    public function event_map_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Excursion::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found excursion with id '.$event_id]);
        }

        PhotoController::publish_images($event_id,'excursion');

        return redirect(route('admin_excursion_map_show'));
    }

    public function event_map_show(Request $request)
    {
        $data = Excursion::paginate(10);

        return view('admin.excursion_map_show',compact('data'));
    }

}
