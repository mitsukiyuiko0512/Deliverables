<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>新規体調登録</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="symptoms">
                <h2>症状</h2>
                <textarea name="post[symptoms]" placeholder="咳、頭痛"></textarea>
            </div>
            <div class="result">
                <h3>診断結果</h3>
                <textarea name="post[result]" placeholder="風邪と診断され、薬を処方された。"></textarea>
            </div>
            <div class="drug">
                <h4>処方薬</h4>
                <textarea name="post[drug]" placeholder="咳止め薬、頭痛薬"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>