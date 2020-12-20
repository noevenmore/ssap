<?php

namespace App\Http\Controllers;

use App\Models\ExcursionRequest;
use Illuminate\Http\Request;

class ExcursionRequestController extends Controller
{
    public function order(Request $request)
    {
        $request->validate(
            [
                'id'=>'required|integer|min:1',
                'name'=>'required|string|min:2|max:127',
                'email'=>'nullable|email|min:2|max:127',
                'phone'=>'required|string|min:4|max:63',
                'count'=>'required|integer',
                'date'=>'required|string|min:2|max:63',
            ]
        );

        $data = new ExcursionRequest;
        $data->excursion_id = $request->input('id');
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->date = $request->input('date');
        $data->people_count = $request->input('count');
        $data->is_check = false;
        $data->save();

        return json_encode(['success'=>true]);
    }
}
