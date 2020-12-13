<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MyFunction;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function __construct()
    {
        // Only admin access
        //$this->middleware('admin');
    }

    public function save_hotel_from_request($hotel,Request $request)
    {
        $hotel->name=$request->input('name','no_name');
        if (!$hotel->name) $hotel->name = 'no_name';

        $hotel->text=$request->input('text','');
        if (!$hotel->text) $hotel->text = '';

        $hotel->addr=$request->input('addr','');
        if (!$hotel->addr) $hotel->addr = '';

        $hotel->blink=$request->input('blink','');
        if (!$hotel->blink) $hotel->blink = '';

        $hotel->phones=$request->input('phones','');
        if (!$hotel->phones) $hotel->phones = '';

        $hotel->work_times=MyFunction::work_days_from_request($request);

        $hotel->save();
    }

    public function hotel_add(Request $request)
    {
        return view('admin.hotel_add');
    }

    public function hotel_add_post(Request $request)
    {
        $data = new Hotel;

        $this->save_hotel_from_request($data,$request);

        return redirect(route('admin_hotel_show'));
    }

    public function hotel_edit(Request $request,$id)
    {
        $data = Hotel::where('id',$id)->first();

        if (!$data) return redirect(404);

        return view('admin.hotel_edit',['data'=>$data]);
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
}
