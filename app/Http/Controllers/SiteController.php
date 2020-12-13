<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Http\Controllers\MyFunction;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        return view('welcome');
    }

    public function photogallery(Request $request)
    {
        return view('photogallery');
    }

    public function excursion(Request $request)
    {
        return view('excursion');
    }

    public function excursion_list(Request $request)
    {
        return view('excursions_catalog');
    }

    public function hotel(Request $request,$id)
    {
        $data = Hotel::findOrFail($id);

        $work_times = MyFunction::work_days_to_string($data->work_times);
        $phones = MyFunction::get_phones_from_line($data->phones); 

        return view('hotel',compact('data','work_times','phones'));
    }

    public function hotel_list(Request $request)
    {
        $data = Hotel::paginate(12);

        return view('hotels_catalog',compact('data'));
    }

    public function publishes(Request $request)
    {
        return view('publishes_catalog');
    }
}
