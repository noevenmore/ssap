<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Photo;

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
}
