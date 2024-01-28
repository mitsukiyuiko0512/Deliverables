<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__post'>
                <h2>症状</h2>
                <input type='text' name='post[symptoms]' value="{{ $post->symptoms }}">
            </div>
            <div class='content__post'>
                <h2>診断結果</h2>
                <input type='text' name='post[result]' value="{{ $post->result }}">
            </div>
            <div class='content__post'>
                <h2>処方薬</h2>
                <input type='text' name='post[drug]' value="{{ $post->drug }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>