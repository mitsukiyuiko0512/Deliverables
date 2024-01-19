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
        <a href='/posts/create'>create</a>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                     <p class='symptoms'>{{ $post->symptoms }}</p>
                     <p class='result'>{{ $post->result }}</p>
                     <p class='drug'>{{ $post->drug }}</p>
                     <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                 </div>
            @endforeach    
        </div>
        <div class='paginate'>{{ $posts->links() }}</div>
    </body>
</html>