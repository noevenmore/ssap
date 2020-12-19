<?php

namespace App\Http\Controllers;

use App\Models\ExcursionFilter;
use Illuminate\Http\Request;

class ExcursionFilterController extends Controller
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

        $event->value=$request->input('value','');
        if (!$event->value) $event->value = '';

        $event->save();
    }

    public function event_add(Request $request)
    {
        return view('admin.excursion_filter_add');
    }

    public function event_add_post(Request $request)
    {
        $data = new ExcursionFilter;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_excursion_filter_show'));
    }

    public function event_edit(Request $request,$id)
    {
        $data = ExcursionFilter::where('id',$id)->first();

        if (!$data) return redirect(404);

        return view('admin.excursion_filter_edit',compact('data'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = ExcursionFilter::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found filter with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_excursion_filter_show'));
    }

    public function event_show(Request $request)
    {
        $data = ExcursionFilter::paginate(10);

        return view('admin.excursion_filter_show',compact('data'));
    }

    public function event_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = ExcursionFilter::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found filter with id '.$event_id]);
        }

        $data->delete();

        return json_encode(['success'=>true]);
    }
}
