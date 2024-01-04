@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/evaluationCreate.css') }}">
@endsection

@section('content')
@if (Auth::check())
<div class="evaluation__group">
    <form class="form" action="/evaluationCreate/{{$shopReserved->id}}" method="post">
        @csrf
        <!-- ５段階評価 -->
        <input type="hidden" name="store_name" value="{{ $shopReserved->reserved_shop }}">
        <input type="hidden" name="user_name" value="{{ $user->name }}">
        <h2 class="evaluation__title">評価</h2>
        <h3 class="evaluation__title"></h3>
        <p class="evaluation-num">5段階評価</p>
        <input id="star1" type="radio" name="evaluation_num" value="1">
        <label for="star1">1</label>
        <input id="star2" type="radio" name="evaluation_num" value="2">
        <label for="star2">2</label>
        <input id="star3" type="radio" name="evaluation_num" value="3" checked>
        <label for="star3">3</label>
        <input id="star4" type="radio" name="evaluation_num" value="4">
        <label for="star4">4</label>
        <input id="star5" type="radio" name="evaluation_num" value="5">
        <label for="star5">5</label>

        <!-- 評価コメント -->
        <h3 class="evaluation__title">コメント</h3>
        <textarea name="comment" id="" cols="60" rows="10" placeholder="250字以内"></textarea>
        <div class="form__button">
            <button class="form__button-submit" type="submit">評価する</button>
        </div>
    </form>
</div>
@endif
@endsection