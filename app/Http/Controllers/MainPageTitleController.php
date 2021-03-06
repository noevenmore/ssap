<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainPageTitle;
use App\Http\Controllers\PhotoController;
use App\Models\Photo;

class MainPageTitleController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('admin');
    }

    public function save_event_from_request($event,Request $request)
    {
        $event->label0=$request->input('label0','');
        if (!$event->label0) $event->label0 = '';

        $event->label0_eng=$request->input('label0_eng','');
        if (!$event->label0_eng) $event->label0_eng = '';

        $event->label1=$request->input('label1','');
        if (!$event->label1) $event->label1 = '';

        $event->label1_eng=$request->input('label1_eng','');
        if (!$event->label1_eng) $event->label1_eng = '';

        $event->label2=$request->input('label2','');
        if (!$event->label2) $event->label2 = '';

        $event->label2_eng=$request->input('label2_eng','');
        if (!$event->label2_eng) $event->label2_eng = '';

        $event->text=$request->input('text','');
        if (!$event->text) $event->text = '';

        $event->text_eng=$request->input('text_eng','');
        if (!$event->text_eng) $event->text_eng = '';

        $event->is_show=$request->input('is_show');
        if ($event->is_show==null) $event->is_show=false;

        $event->save();

        PhotoController::publish_images($event->id,'main_title');
    }

    public function event_add(Request $request)
    {
        $photos=Photo::where(['type'=>'main_title','data_id'=>0])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.mp_title_add',compact('images_list'));
    }

    public function event_add_post(Request $request)
    {
        $data = new MainPageTitle;

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_mp_title_show'));
    }

    public function event_edit(Request $request,$id)
    {
        $data = MainPageTitle::where('id',$id)->first();

        if (!$data) return redirect(404);

        $photos=Photo::where(['type'=>'main_title','data_id'=>$id])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.mp_title_edit',compact('data','images_list'));
    }

    public function event_edit_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = MainPageTitle::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found mp_title with id '.$event_id]);
        }

        $this->save_event_from_request($data,$request);

        return redirect(route('admin_mp_title_show'));
    }

    public function event_show(Request $request)
    {
        $data = MainPageTitle::paginate(10);

        return view('admin.mp_title_show',compact('data'));
    }

    public function event_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = MainPageTitle::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found mp_title with id '.$event_id]);
        }

        PhotoController::delete_images_with_type_and_id('main_title',$event_id);
        $data->delete();

        return json_encode(['success'=>true]);
    }
}
