<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\System;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\MyFunction;

class ShareGlobalVariables
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $menu_items = MenuItem::where('parent_id',0)->orderBy('position', 'desc')->with('childrens','filter')->get();
        view()->share('menu_items',$menu_items);

        view()->share('system_var_lang',\App::getlocale());

        $now = Carbon::now();
        $sys_vars = System::get();

        foreach($sys_vars as $sv)
        {
            if ($sv->name=='eur' && ($now->diffInHours($sv->updated_at)>6))
            {
                MyFunction::get_money_rate();
            }

            view()->share('system_var_'.$sv->name,$sv->value);
        }
        

        return $next($request);
    }
}
