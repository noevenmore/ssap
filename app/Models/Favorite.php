<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->hasOne('App\Models\Photo','id','photo_id');
    }
}
