<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPageTitle extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->hasOne('App\Models\Photo','data_id','id')->where(['type'=>'main_title','tag'=>$this->id])->orderBy('is_main', 'desc');
    }
}
