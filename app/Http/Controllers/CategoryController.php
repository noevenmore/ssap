<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Photo;
use App\Http\Controllers\PhotoController;

class CategoryController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('admin');
    }

    public function save_event_from_request($event,Request $request)
    {
        $event->link=$request->input('link','');
        if (!$event->link) $event->link = '';

        $event->name=$request->input('name','');
        if (!$event->name) $event->name = '';

        $event->name_eng=$request->input('name_eng','');
        if (!$event->name_eng) $event->name_eng = '';

        $event->is_main=$request->input('is_main');
        if ($event->is_main==null) $event->is_main=false;

        $event->save();

        PhotoController::publish_images($event->id,'category');
    }

    public function event_add(Request $request)
    {
        $photos=Photo::where(['type'=>'category','data_id'=>0])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }
        return view('admin.type_add',compact('images_list'));
    }

    public function event_add_post(Request $request)
    {
        $data = new Category;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_type_show'));
    }

    public function event_edit(Request $request,$id)
    {
        $data = Category::where('id',$id)->first();

        if (!$data) return redirect(404);

        $photos=Photo::where(['type'=>'category','data_id'=>$id])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.type_edit',compact('data','images_list'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Category::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found type with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_type_show'));
    }

    public function event_show(Request $request)
    {
        $data = Category::paginate(10);

        return view('admin.type_show',compact('data'));
    }

    public function event_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Category::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found type with id '.$event_id]);
        }

        $data->delete();

        return json_encode(['success'=>true]);
    }
}
