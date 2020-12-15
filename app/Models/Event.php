<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany('App\Models\Photo','data_id','id')->where('type','event')->orderBy('is_main', 'desc');

        //return $this->hasMany('App\Models\Photo');
    }
}
