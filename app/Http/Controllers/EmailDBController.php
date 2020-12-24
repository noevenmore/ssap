<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailDB;

class EmailDBController extends Controller
{
    public function make_fake(Request $request)
    {
        for ($i = 0;$i<1000;$i++)
        {
            $data=new EmailDB;
            $data->email = 'addres'.$i.'@mail.ru';
            $data->save();
        }
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email'=>'required|email|max:127|unique:App\Models\EmailDB,email'
        ]);

        $data=new EmailDB;
        $data->email = $request->input('email');
        $data->save();
    }

    public function unsubscribe(Request $request,$id,$mail)
    {
        $db = EmailDB::findOrFail($id);

        $m = explode('@',$db->email);

        if ($m[0]==$mail)
        {
            $db->delete();
        }

        return redirect(route('index'));
    }
}
