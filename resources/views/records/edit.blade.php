<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/records/{{ $record->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__temperature'>
                <h2>体温</h2>
                <input type='text' name='record[temperature]' value="{{ $record->temperature }}">
            </div>
            <div class='content__symptoms'>
                <h2>症状</h2>
                <input type='text' name='record[symptoms]' value="{{ $record->symptoms }}">
            </div>
            <div class='content__approach'>
                <h2>対処の仕方</h2>
                <input type='text' name='record[approach]' value="{{ $record->approach }}">
            </div>
            <input type="submit" value="update">
        </form>
        <div class="footer">
            <a href="/records/{{ $record->id}}">戻る</a>
        </div>
    </div>
</body>