<!-- 予約完了ページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done__group">
    <div class="done__heading">
        <span>ご予約ありがとうございます</span>
    </div>
    <div class="done__button">
        <a class="done__button-submit" href="/">戻る</a>
    </div>
</div>
@endsection