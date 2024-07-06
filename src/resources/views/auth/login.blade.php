@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css')}}">
@endsection

@section('title', 'Login')

@section('link')
    <form action="/register" method="get">
        <input class="header_button" type="submit" value="register">
    </form>
@endsection

@section('content')
@section('heading', 'Login')
<div class="container">
    <div class="login-box mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" placeholder="例: test@example.com">
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" name="password" id="password" placeholder="例: password">
            </div>
            <div class="text-align-center">
                <button type="submit" class="bg-dark-brawn white btn-login">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection