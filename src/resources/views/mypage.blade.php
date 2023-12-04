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
            <div class="reserved__group-flex">
                <p class="text">Shop</p>
                <p class="text">{{ $shopReserved->reserved_shop }}</p>
            </div>
            <div class="reserved__group-flex">
                <p class="text">Date</p>
                <p class="text">{{ $shopReserved->reserved_date }}</p>
            </div>
            <div class="reserved__group-flex">
                <p class="text">Time</p>
                <p class="text">{{ $shopReserved->reserved_time }}</p>
            </div>
            <div class="reserved__group-flex">
                <p class="text">Number</p>
                <p class="text">{{ $shopReserved->reserved_num }}</p>
            </div>
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
                <div class="card">
                    <div class="card__img">
                        <img src="{{ asset('img/sushi.jpg') }}" alt="" width="280px" height="150px">
                    </div>
                    <div class="card__content">
                        <div class="card__content-cat">仙人</div>
                        <div class="card__content-tag">
                            <p class="card__content-tag-item">#東京都</p>
                            <p class="card__content-tag-item card__content-tag-item--last">#寿司</p>
                        </div>
                        <div class="button">
                            <a class="button-submit" href="/sennin">詳しくみる</a>
                            <img id="click_img" class="hurt-button" src="{{ asset('img/hurt_gray.png') }}" alt="">
                            <script>
                                var click = 0;
                                var img = ['img/hurt_gray.png', 'img/hurt_red.png'];
                                document.getElementById('click_img').onclick = function() {
                                    click++;
                                    this.src = img[click % img.length];
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection