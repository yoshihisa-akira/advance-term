@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/evaluation.css') }}">
@endsection

@section('content')
<div class="evaluation__content">
    <h3 class="evaluation__title">{{ $shop->store_name }}の評価</h3>
    @foreach ($shopsEvaluation as $shopEvaluation)
    @if($shop->store_name == $shopEvaluation->store_name)
    <div class="evaluation__group">
        <div class="user_name">
            <p>{{ $shopEvaluation->user_name }}</p>
        </div>
        <div class="evaluation__num">
            <p class="evaluation__num--top">5段階中</p>
            <p class="evaluation__num--bottom">{{ $shopEvaluation->evaluation_num }}</p>
        </div>
        <div class="evaluation__text">
            <p class="evaluation__text--p">コメント</p>
            <p class="evaluation__text--wide">{{ $shopEvaluation->comment }}</p>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection