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
                     <p class='bookmark'>{{ $record->bookmark }}</p>
                     <a href="/records/{{ $record->id }}">{{ $record->body }}</a>
                     <form action="/records/{{ $record->id }}" id="form_{{ $record->id }}" method="record">
                         @csrf
                         @method('DELETE')
                         <button type="button" onclick="deleteRecord({{ $record->id }})">delete</button> 
                     </form>
                    </h2>
                 </div>
            @endforeach    
        </div>
        <div class='paginate'>{{ $records->links() }}</div>
        <script>
            function deleteRecord(id) {
                'use strict'

                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                     document.getElementById(`form_${id}`).submit();
                }       
            }
        </script>
    </body>
</html>