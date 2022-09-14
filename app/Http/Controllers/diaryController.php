<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use App\Http\Requests\Diaryrequest; // useする
use Storage;


class diaryController extends Controller
{
    
    public function add()
    {
      return view('diary/create');
     }
  
   public function index(Diary $diary)
    {
        return view('diary/index')->with(['diaries' => $diary->getPaginateByLimit()]);
    } 
    
    public function show(Diary $diary)
    {
        return view('diary/show')->with(['diaries' => $diary]);
    }
    
  public function store(Request $request , Diary $diary)
  { 
      $diary = new Diary; 
      $input=$request['diary'];
     // $form = $request->all();
      //s3アップロード開始
      if($request->file('image')){

          $image = $request->file('image');
          // バケットのyama8bucketフォルダへアップロード
          $path = Storage::disk('s3')->putFile('yama8bucket', $image, 'public');
          // アップロードした画像のフルパスを取得
          $diary->image = Storage::disk('s3')->url($path);
       }
      $diary->fill($input)->save();

      return redirect('/');
  }

     public function create(Request $request , Diary $diary)
  {
      return view('diary/create');
  }
     
   /* public function store(Diary $diary , Diaryrequest $request)
    {
        $input = $request['diary'];
        $diary->fill($input)->save();
        return redirect('/diaries/' . $diary->id);
    }
    */
    
    public function edit(Diary $diary)
    {
    return view('diary/edit')->with(['diary' => $diary]);
    }
    
    public function update(Diary $diary , Diaryrequest $request)
    {
        $input_diary = $request['diary'];
        $diary->fill($input_diary)->save();
        return redirect('/diaries/' . $diary->id);
    }
    
    public function delete(Diary $diary)
    {
        $diary->delete();
        return redirect('/');
    }
}
?>
