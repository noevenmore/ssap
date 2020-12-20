<?php

namespace App\Http\Controllers;

use App\Models\SystemText;
use Illuminate\Http\Request;

class SystemTextController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('admin');
    }

    public function save_event_from_request($event,Request $request)
    {
        $event->caption=$request->input('caption','');
        if (!$event->caption) $event->caption = '';

        $event->caption_eng=$request->input('caption_eng','');
        if (!$event->caption_eng) $event->caption_eng = '';

        $event->text=$request->input('text','');
        if (!$event->text) $event->text = '';

        $event->text_eng=$request->input('text_eng','');
        if (!$event->text_eng) $event->text_eng = '';

        $event->save();
    }

    /*
    public function event_add(Request $request)
    {
        return view('admin.system_text_add');
    }

    public function event_add_post(Request $request)
    {
        $data = new Text;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_system_text_show'));
    }
    */

    public function event_edit(Request $request,$id)
    {
        $data = SystemText::where('id',$id)->first();

        if (!$data) return redirect(404);

        return view('admin.system_text_edit',compact('data'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = SystemText::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found text with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_system_text_show'));
    }

    public function event_show(Request $request)
    {
        $data = SystemText::paginate(10);

        return view('admin.system_text_show',compact('data'));
    }

    /*
    public function event_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = SystemText::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found text with id '.$event_id]);
        }

        $data->delete();

        return json_encode(['success'=>true]);
    }
    */
}
