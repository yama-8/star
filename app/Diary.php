<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Diary extends Model
{  

    
    protected $fillable = [
    'title',
    'body',
    'user_id',
    'calender_id'
    
    ];
    
    
    public function user()
    {
        return $this->belongsTo('App\user');
    }

    public function calendar()
    {
        return $this->belongsTo('App\calendar');
    }
    
     public function Month()
    {
        return $this->belongsTo('App\month');
    }

    public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
   public function getMonthDiary($month)
    {
       return $this->whereMonth('created_at', $month)->get();
    }
    
    
    
}