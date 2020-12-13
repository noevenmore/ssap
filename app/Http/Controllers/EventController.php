<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

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

        $event->is_main=$request->input('is_main');
        if ($event->is_main==null) $event->is_main=false;
        
        $event->is_show=$request->input('is_show');
        if ($event->is_show==null) $event->is_show=false;

        $event->save();
    }

    public function event_add(Request $request)
    {
        return view('admin.event_add');
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

        return view('admin.event_edit',['data'=>$data]);
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
