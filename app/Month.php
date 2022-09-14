<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Diary;

class Month extends Model
{
      public function diaryies()   
    {
        return $this->hasMany('App\diary');  
    }
    
      public function calendars_id($select)
    {
       return $this->whereMonth('calendars_id', $select)->get();
    }
    
}
