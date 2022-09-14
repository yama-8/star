<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;

class CalendarController extends Controller
{
     public function create()
    {
        return view('calendar/create'); 
    }
    
    public function store(Calendar $calendar, Request $request)
    {
        $calendar->name = $request->calendar['name'];
        $calendar->host_id = $request->user()->id;
        
        //ユーザーIDの取得
        $email = $request->calendar['email'];
        //$calendar->guest_id = getUser($email);
        $calendar->guest_id=$request->user()->guest_id;
        
        $calendar->save();
    
        return redirect('/');
    }
}
