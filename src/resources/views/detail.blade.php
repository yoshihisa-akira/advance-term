@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<!-- 飲食店詳細ページ -->
<div class="flex">
    <div class="detail__group">
        <div class="shop__title">
            <h2>
                <a href="/">
                    < </a>
            </h2>
            <h2>{{ $shop->store_name }}</h2>
        </div>
        <img src="{{ asset('img/' . $shop->genre . '.jpg') }}" alt="{{$shop->genre}}" width="500px" height="300px">
        <div class="shop__detail">
            <span>#{{ $shop->region }}</span>
            <span>#{{ $shop->genre }}</span>
        </div>
        <div class="shop__detail--last">
            <p>{{ $shop->store_overview }}</p>
        </div>
    </div>

    @if (Auth::check())
    <div class="reserve__group">
        <form class="form" action="/detail" method="post">
            @csrf
            <h2 class="reserve__title">予約</h2>
            <input class="reserved_date" name="reserved_date" type="text" value="" placeholder="2023/04/01">
            <input class="reserved_time" name="reserved_time" type="text" value="" placeholder="17:00">
            <input class="reserved_num" name="reserved_num" type="text" value="" placeholder="1人">
            <input type="hidden" name="reserved_shop" value="{{ $shop->store_name }}">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="reserved__group">
                <form class="reserved__group-number" action="/mypage" method="post">
                    @csrf
                </form>
                <div class="reserved__group-flex">
                    <p class="text">Shop</p>
                    <p class="text">{{ $shop->store_name }}</p>
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Date</p>
                    <p class="text"></p>
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Time</p>
                    <p class="text"></p>
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Number</p>
                    <p class="text"></p>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">予約する</button>
            </div>
        </form>
    </div>
    @endif
</div>

@endsection