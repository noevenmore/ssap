<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;

class SystemController extends Controller
{
    public function var_editor_show(Request $request)
    {
        $facebook = System::where('name','facebook')->first()->value;
        $telegram = System::where('name','telegram')->first()->value;
        $instagram = System::where('name','instagram')->first()->value;

        return view('admin._var_editor',compact('facebook','telegram','instagram'));
    }

    public function var_editor_update_post(Request $request)
    {
        $instagram = $request->input('instagram');
        $telegram = $request->input('telegram');
        $facebook = $request->input('facebook');

        System::where('name', 'instagram')->update(['value' => $instagram]);
        System::where('name', 'telegram')->update(['value' => $telegram]);
        System::where('name', 'facebook')->update(['value' => $facebook]);

        return redirect(route('admin_index'));
    }



}
