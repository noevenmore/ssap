<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany('App\Models\Photo','data_id','id')->where('type','hotel')->orderBy('is_main', 'desc');
    }

    public function image()
    {
        return $this->hasOne('App\Models\Photo','data_id','id')->where('type','hotel')->orderBy('is_main', 'desc');
    }
}
