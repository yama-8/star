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
        <div class='diaryies'>
            @foreach ($diaries as $diary)
                <div class='diary'>
                    <a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a>
                    <p class='body'>{{ $diary->body }}</p>
                </div>
            @endforeach
            <div class='diary'>
                <h2 class='title'></h2>
            </div>
             <div class='paginate'>
            {{ $diaries->links() }}
            <a href='/diaries/create'class="btn btn--black btn--radius btn--cubic">CREATE<i class="fas fa-angle-right fa-position-right"></i></a>
            </div>
            [<a href='/month'>カレンダーへ</a>]
            <form action="/diaries/{{ $diary->id }}" id="form_{{ $diary->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" id="btn">delete</button> 
       
            </form>
           
    </body>
</html>