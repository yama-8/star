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
            {{ $diaries->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $diaries->body }}</p> 
                <img src = "{{$diaries ->image}}">
            </div>
        </div>
        <p class="edit">[<a href="/diaries/{{ $diaries->id }}/edit">edit</a>]</p>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
         <form action="/diaries/{{ $diaries->id }}" id="form_{{ $diaries->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button> 
    </body>
</html>