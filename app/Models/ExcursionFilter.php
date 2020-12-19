<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcursionFilter extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function how_much()
    {
        return $this->hasMany('App\Models\Excursion','filter','value');
    }
}
