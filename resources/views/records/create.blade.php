<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>新規体調登録</h1>
        <form action="/records" method="POST">
            @csrf
            <div class="temperature">
                <h3>体温</h3>
                <textarea name="record[temperature]" placeholder="36.5"></textarea>
            </div>
            <div class="symptoms">
                <h4>症状</h4>
                <textarea name="record[symptoms]" placeholder="咳、頭痛、腹痛"></textarea>
            </div>
            <div class="approach">
                <h5>対処の方法</h5>
                <textarea name="record[approach]" placeholder="薬を飲んで寝た。"></textarea>
            </div>
            <div class="bookmark">
                <h5>ブックマーク</h5>
                <textarea name="record[bookmark]" placeholder="1"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>