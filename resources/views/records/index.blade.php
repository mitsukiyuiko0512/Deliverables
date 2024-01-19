<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>過去の体調記録</h1>
        <a href='/records/create'>create</a>
        <div class='records'>
            @foreach ($records as $record)
                <div class='record'>
                    <h2 class='body'>
                     <p class='temperature'>{{ $record->temperature }}</p>
                     <p class='symptoms'>{{ $record->symptoms }}</p>
                     <p class='approach'>{{ $record->approach }}</p>
                     <a href="/records/{{ $record->id }}">{{ $record->body }}</a>
                    </h2>
                 </div>
            @endforeach    
        </div>
        <div class='paginate'>{{ $records->links() }}</div>
    </body>
</html>