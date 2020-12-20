<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Photo;
use App\Models\EmailDB;
use App\Models\Excursion;
use App\Models\ExcursionRequest;
use App\Mail\UserEmailMailable;
use App\Models\Filter;
use App\Models\System;
use App\Models\SystemText;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        return view('admin.main');
    }

    public function main_page_link_editor(Request $request)
    {
        $main_page_link=System::where('name','main_page_link')->first();
        $main_page_link0=System::where('name','main_page_link0')->first();
        $main_page_link1=System::where('name','main_page_link1')->first();
        $main_page_link2=System::where('name','main_page_link2')->first();

        $photos=Photo::where(['type'=>'main'])->get();

        $images_list = '';
        foreach ($photos as $ph)
        {
            $images_list = $images_list . $ph->src . ';';
        }

        $filters=Filter::get();

        return view('admin.history_edit',compact('main_page_link','main_page_link0','main_page_link1','main_page_link2','images_list','filters'));
    }

    public function main_page_link_editor_post(Request $request)
    {
        $main_page_link=System::where('name','main_page_link')->first();
        $main_page_link0=System::where('name','main_page_link0')->first();
        $main_page_link1=System::where('name','main_page_link1')->first();
        $main_page_link2=System::where('name','main_page_link2')->first();

        if ($main_page_link)
        {
            $main_page_link->value = $request->input('main_link');
            if (!$main_page_link->value) $main_page_link->value='';
            $main_page_link->save();
        }

        if ($main_page_link0)
        {
            $main_page_link0->value = $request->input('main_link1');
            if (!$main_page_link0->value) $main_page_link0->value='';
            $main_page_link0->save();
        }

        if ($main_page_link1)
        {
            $main_page_link1->value = $request->input('main_link2');
            if (!$main_page_link1->value) $main_page_link1->value='';
            $main_page_link1->save();
        }

        if ($main_page_link2)
        {
            $main_page_link2->value = $request->input('main_link3');
            if (!$main_page_link2->value) $main_page_link2->value='';
            $main_page_link2->save();
        }

        return redirect(route('admin_index'));
    }

    public function mailing(Request $request)
    {
        $count = EmailDB::count();

        return view('admin.mailing',compact('count'));
    }

    public function mailing_post(Request $request)
    {
        $db = EmailDB::cursor();
        
        $text = $request->input('text');

        foreach ($db as $d)
        {
            Mail::to($d->email)->queue(new UserEmailMailable($text));//queue(new UserEmailMailable($text));
        }

        return redirect(route('admin_index'));
    }

    public function user_comments(Request $request)
    {
        $data = Comment::orderBy('id','desc')->paginate(10);

        return view('admin.comments_show',compact('data'));
    }

    public function user_comment_full(Request $request,$id)
    {
        $data = Comment::findOrFail($id);
        $name = $data->name;
        $email = $data->email;
        $text = $data->text;

        return view('admin.comments_edit',compact('id','name','email','text'));
    }

    public function comment_delete(Request $request)
    {
        $id = $request->input('id');
        $data = Comment::findOrFail($id);
        $data->delete();
    }

    public function comment_verify(Request $request)
    {
        $id = $request->input('id');
        $data = Comment::findOrFail($id);
        $data->is_check=true;
        $data->save();

        return redirect(route('admin_comments_show'));
    }


    public function excursion_orders(Request $request)
    {
        $data = ExcursionRequest::orderBy('id','desc')->paginate(10);

        return view('admin.order_show',compact('data'));
    }

    public function excursion_order_full(Request $request,$id)
    {
        $data = ExcursionRequest::findOrFail($id);
        $excursion = Excursion::find($data->excursion_id);

        return view('admin.order_edit',compact('data','excursion'));
    }

    public function excursion_order_delete(Request $request)
    {
        $id = $request->input('id');
        $data = ExcursionRequest::findOrFail($id);
        $data->delete();
    }

    public function excursion_order_verify(Request $request)
    {
        $id = $request->input('id');
        $data = ExcursionRequest::findOrFail($id);
        $data->is_check=true;
        $data->save();

        return redirect(route('admin_orders_show'));
    }

}
