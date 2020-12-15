<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function set_english(Request $request)
    {
        Cookie::queue(Cookie::make('locale','en',3600));

        return back();
    }

    public function set_ukrainian(Request $request)
    {
        Cookie::queue(Cookie::make('locale','ua',3600));

        return back();
    }
}
