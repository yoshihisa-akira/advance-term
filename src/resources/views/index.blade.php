<!-- 飲食店一覧ページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
飲食店一覧ページ
<div class="card">
    <div class="card__img">
        <img src="" alt="">
    </div>
</div>

<a href="detail.blade.php">詳しく見る</a>
@endsection