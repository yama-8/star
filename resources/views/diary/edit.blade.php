<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Diary</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
   <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/diaries/{{ $diary->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='diary[title]' value="{{ $diary->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <input type='text' name='diary[body]' value="{{ $diary->body }}">
            </div>
                <input type="file" name="image">
            <input type="submit" value="保存">
            
        </form>
    </div>
</body>
</html>