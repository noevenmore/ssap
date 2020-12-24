<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function __construct()
    {
        // Only admin access
        $this->middleware('auth');
    }

    public function favorite(Request $request)
    {
        $request->validate([
            'type'=>'required|string|max:32',
            'photo_id'=>'required|integer',
            'data_id'=>'required|integer',
        ]);

        $type = $request->input('type');
        $photo_id = $request->input('photo_id');
        $data_id = $request->input('data_id');
        $user = Auth::user();
        $fav = Favorite::where(['user_id'=>$user->id,'type'=>$type,'photo_id'=>$photo_id,'data_id'=>$data_id])->first();

        if (!$fav)
        {
            $fav = new Favorite;

            $fav->user_id = $user->id;
            $fav->type = $type;
            $fav->data_id = $data_id;
            $fav->photo_id = $photo_id;
            $fav->save();

            return json_encode(['success'=>'true','action'=>'create']);
        } else
        {
            $fav->delete();

            return json_encode(['success'=>'true','action'=>'delete']);
        }
    }
}
