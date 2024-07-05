@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css')}}">
@endsection

@section('title', 'admin')

@section('link')
    <form action="/" method="post">
        @csrf
        <input class="header_button" type="submit" value="logout">
    </form>
@endsection

@section('content')
@section('heading', 'Admin')
<div class="container">
    <form class="form-inline" action="" method="post">
        @csrf
        <div class="d-flex justify-content-between mt-2 mb-2">
            <input type="text" name="name" class="mail-form" id="name" placeholder="名前やメールアドレスを入力してください">
            <!-- TODO: デフォルトのデザインがダサいのでカスタムドロップダウン作成 -->
            <select name="select" id="select" class="select-form">
                <option value="" selected disabled>性別</option>
                <option value="1">男性</option>
                <option value="2">女性</option>
                <option value="3">その他</option>
            </select>
            <select name="select" id="select" class="select-form">
                <option value="" selected disabled>お問い合わせの種類</option>
                <option value="1">カテゴリ1</option>
                <option value="2">カテゴリ2</option>
                <option value="3">カテゴリ3</option>
            </select>
            <!-- 日付選択 -->
            <input type="date" name="date" id="date" class="date-form">
            <button type="submit" class="btn-serch bg-dark-brawn white">検索</button>
            <button type="submit" class="btn-reset bg-lighter-brawn white">リセット</button>
        </div>
        <div class="d-flex justify-content-between mb-1">
            <button type="submit" class="btn-export bg-ash">エクスポート</button>
            <!-- ページネーション -->
            <div class="pagination">
                <ul class="pagination
                justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">></a>
                    </li>
                </ul>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="bg-dark-brawn white text-align-left">
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-bottom">
                    <td class="border-left">山田太郎</td>
                    <td>男性</td>
                    <td>mainl@main.com</td>
                    <td>カテゴリ1</td>
                    <td class="border-right">
                        <button type="submit" class="btn-show">詳細</button>
                    </td>
                </tr>
            </tbody>
    </form>
</div>
@endsection