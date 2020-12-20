<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;

class Search extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_eng',
        'text',
        'text_eng',
        'type',
        'data_id',
      ];

      public function image()
      {
            return $this->hasOne('App\Models\Photo','data_id','data_id')->where(['type'=>$this->type=='node'?'hotel':$this->type])->orderBy('is_main', 'desc');
      }
}
