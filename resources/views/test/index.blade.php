<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ログイン機能付きタスク管理サービス</title>
    </head>
    <body>
@extends('layout')

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ログイン</h1>
        <form action="/login" method="post">
            email：<input name="email"><br>
            パスワード：<input  name="password" type="password"><br>
            <button>ログインする</button>
        </form>
@endsection
    </body>
</html>