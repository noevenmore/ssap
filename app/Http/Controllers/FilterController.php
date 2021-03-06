<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use App\Models\Category;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('admin');
    }

    public function save_event_from_request($event,Request $request)
    {
        $event->category_link=$request->input('category_link','');
        if (!$event->category_link) $event->category_link = '';

        $event->name=$request->input('name','');
        if (!$event->name) $event->name = '';

        $event->name_eng=$request->input('name_eng','');
        if (!$event->name_eng) $event->name_eng = '';

        $event->value=$request->input('value','');
        if (!$event->value) $event->value = '';

        $event->is_show=$request->input('is_show');
        if ($event->is_show==null) $event->is_show=false;

        $event->is_redirect_one=$request->input('is_redirect_one');
        if ($event->is_redirect_one==null) $event->is_redirect_one=false;

        $event->is_show_phones=$request->input('is_show_phones');
        if ($event->is_show_phones==null) $event->is_show_phones=false;

        $event->is_show_link=$request->input('is_show_link');
        if ($event->is_show_link==null) $event->is_show_link=false;

        $event->is_show_worktimes=$request->input('is_show_worktimes');
        if ($event->is_show_worktimes==null) $event->is_show_worktimes=false;

        $event->is_can_comment=$request->input('is_can_comment');
        if ($event->is_can_comment==null) $event->is_can_comment=false;

        $event->save();
    }

    public function event_add(Request $request)
    {
        $categorys = Category::get();

        return view('admin.filter_add',compact('categorys'));
    }

    public function event_add_post(Request $request)
    {
        $data = new Filter;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_filter_show'));
    }

    public function event_edit(Request $request,$id)
    {
        $categorys = Category::get();
        $data = Filter::where('id',$id)->first();

        if (!$data) return redirect(404);

        return view('admin.filter_edit',compact('data','categorys'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Filter::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found filter with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_filter_show'));
    }

    public function event_show(Request $request)
    {
        $data = Filter::paginate(10);

        return view('admin.filter_show',compact('data'));
    }

    public function event_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Filter::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found filter with id '.$event_id]);
        }

        $data->delete();

        return json_encode(['success'=>true]);
    }

    public function get_category_filters(Request $request)
    {
        $link = $request->input('link');

        $filters=Filter::where('category_link',$link)->get();

        return view('admin._d_filter',compact('filters'));
    }
}
