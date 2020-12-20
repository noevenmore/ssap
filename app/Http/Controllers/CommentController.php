<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
        $request->validate([
            'id'=>'required|integer|min:0',
            'type'=>'required|string|max:63',
            'name'=>'required|string|min:2|max:127',
            'email'=>'required|email|max:127',
            'text'=>'required|string|min:4'
        ]);

        $c = new Comment;
        $c->is_check = false;
        $c->is_from_user = false;
        $c->reply_to=0;
        $c->user_id=0;
        $c->data_id = $request->input('id');
        $c->type = $request->input('type');
        $c->name = $request->input('name');
        $c->email = $request->input('email');
        $c->text = $request->input('text');
        $c->save();
    }
}
