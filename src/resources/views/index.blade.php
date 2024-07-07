@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection
@section('title', 'Contact')

@section('content')
@section('heading', 'Contact')
    <div class="container">
        <form class action="/confirm" method="post">
            @csrf
            <div class="form-group mt-2">
                <div class="form-label">
                    <label for="お名前">お名前 <span class="required">※</span></label>
                </div>
                <div class="form-content d-flex justify-content-between">
                    <input type="text" name="first_name" class="base-form mr-2" placeholder="例: 山田">
                    <input type="text" name="last_name" class="base-form" placeholder="例: 太郎">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="性別">性別 <span class="required">※</span></label>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex ml-1">
                        @foreach($params['genders'] as $gender)
                            <label class="custom-radio">
                                <input type="radio" name="gender" value="{{ $loop->iteration - 1 }}" hidden checked>
                                <span class="radio-indicator"></span>
                                {{$gender}}
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label ">
                    <label for="メールアドレス">メールアドレス <span class="required">※</span></label>
                </div>
                <div class="form-content">
                    <input type="text" name="email" class="base-form" placeholder="例: test@example.com">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label ">
                    <label for="電話番号">電話番号 <span class="required">※</span></label>
                </div>
                <div class="form-content d-flex justify-content-between">
                    <input type="text" name="tel1" class="base-form" placeholder="080"> <span class="d-flex align-items-center ml-1 mr-1">-</span>
                    <input type="text" name="tel2" class="base-form" placeholder="1234"> <span class="d-flex align-items-center ml-1 mr-1">-</span>
                    <input type="text" name="tel3" class="base-form" placeholder="5678">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="住所">住所 <span class="required">※</span></label>
                </div>
                <div class="form-content">
                    <input type="text" name="address" class="base-form" placeholder="例: 東京都渋谷区千駄ヶ谷１−２−３">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="建物">建物名</label>
                </div>
                <div class="form-content">
                    <input type="text" name="building" class="base-form" placeholder="例: 千駄ヶ谷マンション101">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="お問い合わせの種類">お問い合わせの種類 <span class="required">※</span></label>
                </div>
                <div class="dropdown">
                    <div class="select-box" tabindex="1">選択してください <span><svg width="15" height="15" viewBox="0 0 100 100"><polygon points="0,0 100,0 50,50" fill="#89725d" /></svg></span></div>
                    <div class="options-container">
                        @foreach($params['categories'] as $category)
                            <div class="option" data-value="{{ $loop->iteration }}">{{ $category->content }}</div>
                        @endforeach
                    </div>
                    <input type="hidden" name="category_id">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label align-items-start ">
                    <label for="お問い合わせ内容">お問い合わせ内容 <span class="required">※</span></label>
                </div>
                <div class="form-content">
                    <textarea name="detail" class="description-form" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>
            <div class="text-align-center">
                <button type="submit" class="btn-submit bg-dark-brawn white">確認画面</button>
            </div>
        </form>
    </div>
@endsection