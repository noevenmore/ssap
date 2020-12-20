<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excursion extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany('App\Models\Photo','data_id','id')->where(['type'=>'excursion','tag'=>''])->orderBy('is_main', 'desc');
    }

    public function image()
    {
        return $this->hasOne('App\Models\Photo','data_id','id')->where(['type'=>'excursion','tag'=>''])->orderBy('is_main', 'desc');
    }

    public function image_map()
    {
        return $this->hasOne('App\Models\Photo','data_id','id')->where(['type'=>'excursion','tag'=>'map'])->orderBy('is_main', 'desc');
    }

    public function comment_count()
    {
        return $this->hasOne('App\Models\Comment','data_id','id')->where(['type'=>'excursion','is_check'=>true])->count();
    }
}
