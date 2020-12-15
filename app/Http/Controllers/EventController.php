<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;

class EventController extends Controller
{
    public function __construct()
    {
        // Only admin access
        //$this->middleware('admin');
    }

    public function save_event_from_request($event,Request $request)
    {
        $event->type=$request->input('type','');
        if (!$event->type) $event->type = 'other';
        
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

        $event->is_main=$request->input('is_main');
        if ($event->is_main==null) $event->is_main=false;
        
        $event->is_show=$request->input('is_show');
        if ($event->is_show==null) $event->is_show=false;

        $event->length=$request->input('length','0');
        if (!$event->length) $event->length = 0;

        $event->price=$request->input('price','0');
        if (!$event->price) $event->price = 0;

        if ($request->input('no_time'))
        {
            $event->start = null;
        } else
        {
            $event->start=$request->input('start','');
            if (!$event->start) $event->start = null;
        }


        $event->save();

        PhotoController::publish_images($event->id,'event');
    }

    public function event_add(Request $request)
    {
        $photos=Photo::where(['type'=>'event','data_id'=>0])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.event_add',compact('images_list'));
    }

    public function event_add_post(Request $request)
    {
        $data = new Event;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_event_show'));
    }

    public function event_edit(Request $request,$id)
    {
        $data = Event::where('id',$id)->first();

        if (!$data) return redirect(404);

        $photos=Photo::where(['type'=>'event','data_id'=>$id])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.event_edit',compact('data','images_list'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Event::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found event with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_event_show'));
    }

    public function event_show(Request $request)
    {
        $data = Event::paginate(10);

        return view('admin.event_show',compact('data'));
    }
}
