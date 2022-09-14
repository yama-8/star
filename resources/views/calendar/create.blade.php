<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
    </head>
    @extends('layouts.app')
    
    @section('content')
    <body>
        <h1>カレンダー作成</h1>
    
          <form action="/calendars" method="POST">
             @csrf
            <div class ="name">
            　　<h2>name</h2>
        　　      <input type ="text" name="calendar[name]" placeholder="名前"/>
        　　</div>
        
    　       <div class ="email">
            　　<h2>email</h2>
            　　<input type ="text" name="calendar[email]" placeholder="メールアドレス"/>
            </div>
            
            <div class ="guest_id">
                <h2>相手のID</h2>
                <input type ="int" name="calendar[guest_id]" />
            </div>
       <input type="submit" value="作成"/>
    </form>
        <div class ="back">[<a href="/">back</a>]</div>
    </body>
    @endsection
</html>
