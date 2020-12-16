<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function get_money_rate(Request $request)
    {
        $usd = '21.2';
        $eur = '33.1';

        return json_encode(['usd'=>$usd,'eur'=>$eur]);
    }
}
