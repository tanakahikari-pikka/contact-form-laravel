@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection
@section('title', 'Contact')

@section('content')
@section('heading', 'Contact')
    <div class="container">
        <form class action="" method="post">
            <div class="form-group mt-2">
                <div class="form-label">
                    <label for="お名前">お名前 <span class="required">※</span></label>
                </div>
                <div class="form-content d-flex justify-content-between">
                    <input type="text" name="name" class="base-form mr-2" id="name" placeholder="例: 山田">
                    <input type="text" name="name" class="base-form" id="name" placeholder="例: 太郎">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="性別">性別 <span class="required">※</span></label>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex ml-1">
                        <label class="custom-radio">
                            <input type="radio" name="gender" value="male" hidden checked>
                            <span class="radio-indicator"></span>
                            男性
                        </label>
                        <label class="custom-radio">
                            <input type="radio" name="gender" value="female" hidden>
                            <span class="radio-indicator"></span>
                            女性
                        </label>
                        <label class="custom-radio">
                            <input type="radio" name="gender" value="other" hidden>
                            <span class="radio-indicator"></span>
                            その他
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label ">
                    <label for="メールアドレス">メールアドレス <span class="required">※</span></label>
                </div>
                <div class="form-content">
                    <input type="text" name="mail" class="base-form" id="name" placeholder="例: test@example.com">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label ">
                    <label for="電話番号">電話番号 <span class="required">※</span></label>
                </div>
                <div class="form-content d-flex justify-content-between">
                    <input type="text" name="tel1" class="base-form" id="tel1" placeholder="080"> <span class="d-flex align-items-center ml-1 mr-1">-</span>
                    <input type="text" name="tel2" class="base-form" id="tel2" placeholder="1234"> <span class="d-flex align-items-center ml-1 mr-1">-</span>
                    <input type="text" name="tel3" class="base-form" id="tel3" placeholder="5678">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label ">
                    <label for="住所">住所 <span class="required">※</span></label>
                </div>
                <div class="form-content">
                    <input type="text" name="address" class="base-form" id="address" placeholder="例: 東京都渋谷区千駄ヶ谷１−２−３">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="建物">建物名</label>
                </div>
                <div class="form-content">
                    <input type="text" name="building" class="base-form" id="building" placeholder="例: 千駄ヶ谷マンション101">
                </div>
            </div>
            <div class="form-group">
                <div class="form-label">
                    <label for="お問い合わせの種類">お問い合わせの種類 <span class="required">※</span></label>
                </div>
                <div class="form-content">
                    <select name="category" id="category" class="category-form">
                        <!-- TODO: デフォルトのデザインがダサいのでカスタムドロップダウン作成 -->
                        <option value="" selected disabled>選択してください</option>
                        <option value="1">カテゴリ1</option>
                        <option value="2">カテゴリ2</option>
                        <option value="3">カテゴリ3</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="form-label align-items-start ">
                    <label for="お問い合わせ内容">お問い合わせ内容 <span class="required">※</span></label>
                </div>
                <div class="form-content">
                    <textarea name="description" id="description" class="description-form" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>
            <div class="text-align-center">
                <button type="submit" class="btn-submit bg-dark-brawn white">確認画面</button>
            </div>
        </form>
    </div>
@endsection