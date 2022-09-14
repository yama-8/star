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
     <form method="get" action="month/1">
          <p>カレンダーを選択 <span class="req">※</span></p>
          <select name="ca">
             <option value="option">1</option>
          </select>
          <input type="submit" value="決定">
     </form>

    </body>
</html>