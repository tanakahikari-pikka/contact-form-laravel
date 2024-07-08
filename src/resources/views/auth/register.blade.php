@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('link')
    <form action="/login" method="get">
        <input class="header_button" type="submit" value="login">
    </form>
@endsection
@section('title', 'Register')

@section('content')

@section('heading', 'Register')
<div class="container">
    <div class="register-box mt-3">
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="name">お名前</label>
                <input type="text" name="name" placeholder="例: 山田　太郎">
                <p class="error-message">
                    @error('name')
                    ※
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form-group">
                <label for="email">メールアドレス</label>
                <input type="email" name="email" placeholder="例: test@example.com">
                <p class="error-message">
                    @error('email')
                    ※
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" name="password" placeholder="例: password">
                <p class="error-message">
                    @error('password')
                    ※
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="form-group">
                <label for="password">確認用パスワード</label>
                <input type="password" name="password_confirmation" placeholder="例: password">
                <p class="error-message">
                    @error('password_confirmation')
                    ※
                    {{ $message }}
                    @enderror
                </p>
            </div>
            <div class="text-align-center">
                <button type="submit" class="bg-dark-brawn white btn-register">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection