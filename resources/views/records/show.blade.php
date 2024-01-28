<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $record->title }}
        </h1>
        <div class="content">
            <div class="content__record">
                <h3>体温</h3>
                <h4>症状</h4>
                <h5>対処の仕方</h5>
                <h6>ブックマーク</h6>
                <p>{{ $record->body }}</p>    
            </div>
        </div>
        <div class="edit">
            <a href="/records/{{ $record->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
</html>