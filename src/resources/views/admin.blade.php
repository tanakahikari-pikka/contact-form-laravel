@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css')}}">
@endsection


@section('title', 'admin')

@section('link')
    <form action="/logout" method="post">
        @csrf
        <input class="header_button" type="submit" value="logout">
    </form>
@endsection

@section('content')
@section('heading', 'Admin')
<div class="container">
    <form class="form-inline" action="">
        @csrf
        <!--　TODO： 画面幅に応じて　ボタン群の幅を可変にする -->
        <div class="d-flex justify-content-between mt-2 mb-2">
            <input type="text" name="name" class="mail-form" id="name" placeholder="名前やメールアドレスを入力してください">
            <div class="dropdown">
                <div class="select-box" tabindex="1">性別</div>
                <div class="options-container">
                    <div class="option" data-value="1">男性</div>
                    <div class="option" data-value="2">女性</div>
                    <div class="option" data-value="3">その他</div>
                </div>
                <input type="hidden" name="gender" id="gender">
            </div>
            <div class="dropdown">
                <div class="select-box" tabindex="1">お問い合わせの種類</div>
                <div class="options-container">
                    <div class="option" data-value="1">カテゴリ1</div>
                    <div class="option" data-value="2">カテゴリ2</div>
                    <div class="option" data-value="3">カテゴリ3</div>
                </div>
                <input type="hidden" name="category" id="category">
            </div>
            <!-- 日付選択 -->
            <input type="date" name="date" id="date" class="date-form">
            <button type="submit" class="btn-serch bg-dark-brawn white">検索</button>
            <button type="submit" class="btn-reset bg-lighter-brawn white">リセット</button>
        </div>
        <div class="d-flex justify-content-between mb-1">
            <button type="submit" class="btn-export bg-ash">エクスポート</button>
            {{ $contacts->links('vendor.pagenation.custom') }}
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
                @foreach($contacts as $contact)
                    <div id="modal-{{ $contact->id }}" class="modal">
                        <div class="modal-content">
                            <div class="modal-container">
                                <span class="close">&times;</span>
                                <div class="d-flex mb-2">
                                    <p class="modal-label">お名前</p>
                                    <p class="modal-value">{{ $contact->first_name." ".$contact->last_name }}</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <p class="modal-label">性別</p>
                                    <p class="modal-value">{{ getGenderText((int)$contact->gender)}}</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <p class="modal-label">メールアドレス</p>
                                    <p class="modal-value">{{ $contact->email }}</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <p class="modal-label">お問い合わせの種類</p>
                                    <p class="modal-value">{{ $contact->category->content }}</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <p class="modal-label">お問い合わせ内容</p>
                                    <p class="modal-value">{{ $contact->detail }}</p>
                                </div>
                                <div class="text-align-center">
                                    <button class="delete white">削除</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <tr class="border-bottom">
                        <td class="border-left">{{ $contact['first_name']." ".$contact['last_name'] }}</td>
                        <td>{{ getGenderText((int)$contact['gender']) }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['category']['content'] }}</td>
                        <td class="border-right">
                            <button class="btn-show openModalBtn" data-modal-id="modal-{{ $contact->id }}">詳細</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
</div>

<script src="{{ asset('js/modal.js') }}"></script>

@endsection

