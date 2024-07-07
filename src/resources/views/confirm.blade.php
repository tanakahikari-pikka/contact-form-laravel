@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('title', 'confirm')

@section('content')
@section('heading', 'Confirm')
<div class="container">
    <form action="/create" method="post">
        @csrf
        <table border="1" class="mt-3">
            <tbody>
                <tr>
                    <!-- 名前まとめて保存 -->
                    <th>お名前</th>
                    <td>{{ $contact['first_name'] . " " . $contact['last_name'] }}</td>
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                </tr>
                <tr>
                    <th>性別</th>
                    <td>{{ getGenderText((int)$contact['gender']) }}</td>
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $contact['email']}}</td>
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
                </tr>
                <tr>
                    <!-- 電話番号まとめて保存 -->
                    <th>電話番号</th>
                    <td>{{ $contact['tel1'].$contact['tel2'].$contact['tel3'] }}</td>
                    <input type="hidden" name="tell" value="{{ $contact['tel1'].$contact['tel2'].$contact['tel3'] }}">
                </tr>
                <tr>
                    <th>住所</th>
                    <td>{{ $contact['address'] }}</td>
                    <input type="hidden" name="address" value="{{ $contact['address'] }}">
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>{{ $contact['building'] }}</td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>{{ $category['content'] }}</td>
                    <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>{{ $contact['detail'] }}</td>
                    <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn-submit bg-dark-brawn white mr-2">送信</button>
            <button type="button" class="decoration-line" onclick="history.back()">修正</button>
        </div>
    </form>
</div>
@endsection