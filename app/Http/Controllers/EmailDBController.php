<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailDB;

class EmailDBController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email'=>'required|email|unique:App\Models\EmailDB,email'
        ]);

        $data=new EmailDB;
        $data->email = $request->input('email');
        $data->save();
    }

    public function unsubscribe(Request $request)
    {
        $request->validate([
            'email'=>'required|email'
        ]);

        $data=EmailDB::where('email',$request->input('email'));
        if ($data)
        {
            $data->delete();
        }
    }
}
