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
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                     <p class='temperature'>{{ $post->temperature }}</p>
                     <p class='symptoms'>{{ $post->symptoms }}</p>
                     <p class='approach'>{{ $post->approach }}</p>
                     <a href="/records/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                 </div>
            @endforeach    
        </div>
        <div class='paginate'>{{ $records->links() }}</div>
    </body>
</html>