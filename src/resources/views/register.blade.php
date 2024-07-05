@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('link')
    <form action="/" method="post">
        @csrf
        <input class="header_button" type="submit" value="login">
    </form>
@endsection
@section('title', 'Register')

@section('content')
@section('heading', 'Register')
<div class="container">
    <div class="register-box mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" name="name" id="name" placeholder="例: 山田　太郎">
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" id="email" placeholder="例: test@example.com">
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" name="password" id="password" placeholder="例: password">
            </div>
            <div class="text-align-center">
                <button type="submit" class="bg-dark-brawn white btn-register">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection