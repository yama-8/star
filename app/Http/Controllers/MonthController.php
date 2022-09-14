<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Month;
use App\Diary;

class MonthController extends Controller
{
    public function index()
    {
        return view('month/index');
    }
    
    public function show(Diary $diary, Request $request)
    {
        $month=$request->month;
        $diaries=$diary->getMonthDiary($month);
        return view('month/show')->with(['diaries' => $diaries]);
        
    }  
    
    public function select()
    {
        return view('month/select');
    }
}
