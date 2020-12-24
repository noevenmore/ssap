<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\MyFunction;
use App\Models\Category;
use App\Models\Filter;
use App\Models\Hotel;
use App\Http\Controllers\SearchController;

class HotelController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('admin');
    }

    public function save_hotel_from_request($hotel,Request $request)
    {
        $hotel->name=$request->input('name','no_name');
        if (!$hotel->name) $hotel->name = 'no_name';

        $hotel->type=$request->input('type','unknown');
        if (!$hotel->type) $hotel->type = 'unknown';

        $hotel->text=$request->input('text','');
        if (!$hotel->text) $hotel->text = '';

        $hotel->addr=$request->input('addr','');
        if (!$hotel->addr) $hotel->addr = '';

        $hotel->name_eng=$request->input('name_eng','no_name');
        if (!$hotel->name_eng) $hotel->name_eng = 'no_name';

        $hotel->text_eng=$request->input('text_eng','');
        if (!$hotel->text_eng) $hotel->text_eng = '';

        $hotel->addr_eng=$request->input('addr_eng','');
        if (!$hotel->addr_eng) $hotel->addr_eng = '';

        $hotel->blink=$request->input('blink','');
        if (!$hotel->blink) $hotel->blink = '';

        $hotel->phones=$request->input('phones','');
        if (!$hotel->phones) $hotel->phones = '';

        $hotel->filter=$request->input('filter','');
        if (!$hotel->filter) $hotel->filter = '';

        $hotel->admin_email=$request->input('admin_email','');
        if (!$hotel->admin_email) $hotel->admin_email = '';

        $hotel->is_show_ex_param=$request->input('is_show_ex_param');
        if ($hotel->is_show_ex_param==null) $hotel->is_show_ex_param=false;
        

        $hotel->work_times=MyFunction::work_days_from_request($request);

        $hotel->slug = str_slug($hotel->name);

        $hotel->save();

        PhotoController::publish_images($hotel->id,'hotel');
        SearchController::DoSave('node',$hotel);
    }

    public function hotel_add(Request $request)
    {
        $categorys = Category::get();
        $photos=Photo::where(['type'=>'hotel','data_id'=>0])->get();
        $filters=Filter::get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.hotel_add',compact('images_list','categorys','filters'));
    }

    public function hotel_add_post(Request $request)
    {
        $data = new Hotel;

        $this->save_hotel_from_request($data,$request);

        return redirect(route('admin_hotel_show'));
    }

    public function hotel_edit(Request $request,$id)
    {
        $categorys = Category::get();
        $data = Hotel::where('id',$id)->first();

        if (!$data) return redirect(404);

        $filters=Filter::where('category_link',$data->type)->get();
        $photos=Photo::where(['type'=>'hotel','data_id'=>$id])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        return view('admin.hotel_edit',compact('data','images_list','categorys','filters'));
    }

    public function hotel_edit_post(Request $request)
    {
        $hotel_id = $request->input('id');

        $data = Hotel::where('id',$hotel_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found hotel with id '.$hotel_id]);
        }

        $this->save_hotel_from_request($data,$request);

        return redirect(route('admin_hotel_show'));
    }

    public function hotel_show(Request $request)
    {
        $data = Hotel::paginate(10);

        return view('admin.hotel_show',compact('data'));
    }

    public function hotel_delete_post(Request $request)
    {
        $event_id = $request->input('id');

        $data = Hotel::where('id',$event_id)->first();
        if (!$data)
        {
            return json_encode(['success'=>false,'message'=>'cant found node with id '.$event_id]);
        }

        PhotoController::delete_images_with_type_and_id('hotel',$event_id);
        SearchController::DoDelete('node',$data);

        $data->delete();

        return json_encode(['success'=>true]);
    }
}
