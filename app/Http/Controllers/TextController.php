<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;

class TextController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('admin');
    }

    public function save_event_from_request($event,Request $request)
    {
        $event->name=$request->input('name','');
        if (!$event->name) $event->name = '';

        $event->name_eng=$request->input('name_eng','');
        if (!$event->name_eng) $event->name_eng = '';

        $event->text=$request->input('text','');
        if (!$event->text) $event->text = '';

        $event->text_eng=$request->input('text_eng','');
        if (!$event->text_eng) $event->text_eng = '';

        $event->save();
    }

    public function event_add(Request $request)
    {
        return view('admin.text_add');
    }

    public function event_add_post(Request $request)
    {
        $data = new Text;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_text_show'));
    }

    public function event_edit(Request $request,$id)
    {
        $data = Text::where('id',$id)->first();

        if (!$data) return redirect(404);

        return view('admin.text_edit',compact('data'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Text::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found text with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_text_show'));
    }

    public function event_show(Request $request)
    {
        $data = Text::paginate(10);

        return view('admin.text_show',compact('data'));
    }

    public function event_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Text::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found text with id '.$event_id]);
        }

        $data->delete();

        return json_encode(['success'=>true]);
    }
}
