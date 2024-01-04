<!-- マイページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<!-- マイページ -->
<div class="flex">

    <div class="reserved__content">
        <div class="reserved__heading">
            <h3 class="reserved__heading-title">
                予約状況
            </h3>
        </div>
        @foreach($shopsReserved as $shopReserved)
        <div class="reserved__group">
            <form class="reserved__group-number" action="/mypage" method="post">
                @csrf
                <p class="reserved--text">予約{{ $shopReserved->number }}</p>
                <input type="hidden" name="id" value="{{ $shopReserved->id }}">
                <input class="aaa" type="image" src="{{ asset('img/check.png') }}" alt="" width="30px" height="30px">
            </form>
            <form action="/mypage/update" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $shopReserved->id }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="reserved__group-flex">
                    <p class="text">Shop</p>
                    <input class="input" name="reserved_shop" value="{{ $shopReserved->reserved_shop }}" readonly>
                    <a class="evaluation" href="/evaluationCreate/{{ $shopReserved->id }}">評価する</a>
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Date</p>
                    <input class="input" type="text" name="reserved_date" value="{{ $shopReserved->reserved_date }}" background="#000">
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Time</p>
                    <input class="input" type="text" name="reserved_time" value="{{ $shopReserved->reserved_time }}">
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Number</p>
                    <input class="input" name="reserved_num" value="{{ $shopReserved->reserved_num }}">
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">予約変更</button>
                </div>
            </form>
        </div>
        @endforeach
    </div>

    <div class="user__content">
        <h1 class="user__name">
            {{ $user->name }}さん
        </h1>
        <div class="user__favorite-shops">
            <h2 class="favorite-shops__title">
                お気に入り店舗
            </h2>
            <div class="favorite-shops__group">
                @forElse($favoriteShops as $favoriteShop)
                <div class="card">
                    <div class="card__img">
                        <img src="{{ asset('img/' . $favoriteShop->genre . '.jpg') }}" alt="" width="280px" height="150px">
                    </div>
                    <div class="card__content">
                        <div class="card__content-cat">{{ $favoriteShop->store_name }}</div>
                        <div class="card__content-tag">
                            <p class="card__content-tag-item">#{{ $favoriteShop->region }}</p>
                            <p class="card__content-tag-item card__content-tag-item--last">#{{ $favoriteShop->genre }}</p>
                        </div>
                        <div class="button">
                            <a class="button-submit" href="/sennin">詳しくみる</a>
                            <form class="favorite-remove__group" action="/delete" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $favoriteShop->id }}">
                                <input class="hurt-button" type="image" src="{{ asset('img/hurt_red.png') }}" alt="" width="36px" height="36px">
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <p>お気に入りはありません</p>
                @endforElse
            </div>
        </div>
    </div>
</div>

@endsection