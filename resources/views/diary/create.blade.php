<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Diary</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="/css/diary.css">
    </head>
    <body>
        <h1>MY DIARY</h1>
        <form action="{{ action('diaryController@store') }}" enctype="multipart/form-data"  method="post" >
             @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="diary[title]" placeholder="タイトル" value="{{ old('diary.title') }}" />
                 <p class="title__error" style="color:red">{{ $errors->first('diary.title') }}</p>
            </div>
            <input value="{{Auth::id()}}" name="diary[user_id]" type="hidden">
            <input value="1" name="diary[calender_id]" type="hidden">
            <div class="body">
                <h2>Body</h2>
                <textarea name="diary[body]" placeholder="今日も1日お疲れさまでした。">{{ old('diary.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('diary.body') }}</p>
            <!-- アップロードフォームの作成 -->
            </div>
                <input type="file" name="image">
                <input type="submit" value="投稿">
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>

