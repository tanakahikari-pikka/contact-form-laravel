@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css')}}">
@endsection

@section('title', 'thanks')

@section('content')
<div class="container">
    <p class="big-bg-text">Thank You</p>
    <p class="thankyou">お問い合わせありがとうございました</p>
    <button class="home">
        <a href="/" class="bg-dark-brawn">Home</a>
    </button>
</div>
@endsection