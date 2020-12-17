<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function childrens()
    {
        return $this->hasMany('App\Models\MenuItem','parent_id','id')->orderBy('position', 'desc');
    }

    public function filter()
    {
        return $this->hasOne('App\Models\Filter','id','filter_id');
    }
}
