<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\Filter;
use App\Models\Text;

class MenuItemController extends Controller
{
    public function __construct()
    {
        // Only admin access
        //$this->middleware('admin');
    }

    public function save_event_from_request($event,Request $request)
    {
        $event->name=$request->input('name','');//
        if (!$event->name) $event->name = '';

        $event->name_eng=$request->input('name_eng','');//
        if (!$event->name_eng) $event->name_eng = '';

        $event->is_main=$request->input('is_main');//
        if ($event->is_main==null) $event->is_main=false;

        $event->category_id=$request->input('category_id','');
        if (!$event->category_id) $event->category_id = 0;

        $event->filter_id=$request->input('filter_id','');//
        if (!$event->filter_id) $event->filter_id = 0;

        $event->position=$request->input('position','');//
        if (!$event->position) $event->position = 0;

        $event->parent_id=$request->input('parent_id','');//
        if (!$event->parent_id) $event->parent_id = 0;

        $event->text_id=$request->input('text_id','');
        if (!$event->text_id) $event->text_id = 0;

        $event->link_type=$request->input('link_type','');//
        if (!$event->link_type) $event->link_type = '';

        $event->save();
    }

    public function event_add(Request $request)
    {
        $menu_items = MenuItem::get();
        $filters = Filter::get();
        $texts = Text::get();

        return view('admin.menu_item_add',compact('menu_items','filters','texts'));
    }

    public function event_add_post(Request $request)
    {
        $data = new MenuItem;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_menu_item_show'));
    }

    public function event_edit(Request $request,$id)
    {
        $data = MenuItem::where('id',$id)->first();

        if (!$data) return redirect(404);

        $menu_items = MenuItem::get();
        $filters = Filter::get();
        $texts = Text::get();

        return view('admin.menu_item_edit',compact('data','menu_items','filters','texts'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = MenuItem::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found menu_item with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_menu_item_show'));
    }

    public function event_show(Request $request)
    {
        $data = MenuItem::paginate(10);

        return view('admin.menu_item_show',compact('data'));
    }

    public function event_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = MenuItem::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found menu_item with id '.$event_id]);
        }

        $data->delete();

        return json_encode(['success'=>true]);
    }

}
