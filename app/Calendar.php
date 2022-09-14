<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
     public function diaryies()   
    {
        return $this->hasMany('App\diary');  
    }
}
