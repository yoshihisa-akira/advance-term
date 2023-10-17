<!-- サンクスページ -->

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks-form__content">
    <div class="thanks-form__heading">
        <span>会員登録ありがとうございます</span>
    </div>
    <div class="form__button">
        <a class="form__button-submit" href="">ログインする</a>
    </div>
</div>
@endsection