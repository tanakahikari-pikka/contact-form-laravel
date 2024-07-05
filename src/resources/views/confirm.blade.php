@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('title', 'confirm')

@section('content')
@section('heading', 'Confirm')
<div class="container">
    <table border="1" class="mt-3">
        <tbody>
            <tr>
                <th>お名前</th>
                <td>山田 太郎</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>男性</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>test@example.com</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>080-1234-5678</td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>カテゴリ1</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    aaaaaaaaaaaaaaaa <br>
                    aaaaaaaaaaaaaaaa
                </td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3">
        <button type="submit" class="btn-submit bg-dark-brawn white mr-2">送信</button>
        <button type="submit" class="decoration-line">修正</button>
    </div>
</div>
@endsection