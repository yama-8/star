<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Diary</title>
        <!-- Fonts -->
         <link href="{{ asset('css/diary.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
        </h1>
        <div class="content">
            <div class="content__post">
             @foreach($diaries as $diary)
              <a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a>
             @endforeach
            </div>
        </div>
        <div class="footer">
            <a href="/month">戻る</a>
        </div>
    
    </body>
</html>