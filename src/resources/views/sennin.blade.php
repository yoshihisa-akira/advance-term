@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<!-- 仙人 -->
<div class="flex">
    <div class="detail__group">
        <div class="shop__title">
            <h2>
                <a href="/">
                    <
                </a>
            </h2>
            <h2>仙人</h2>
        </div>
        <img src="{{ asset('img/sushi.jpg') }}" alt="" width="500px" height="300px">
        <div class="shop__detail">
            <span>#東京都</span>
            <span>#寿司</span>
        </div>
        <div class="shop__detail--last">
            <p>料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。</p>
        </div>
    </div>


    <div class="reserve__group">
        <form class="form" action="">
            <h2 class="reserve__title">予約</h2>
            <input class="date" type="text">
            <input class="time" type="text">
            <input class="number" type="text">

            <div class="form__button">
                <button class="form__button-submit" type="submit">予約する</button>
            </div>
        </form>
    </div>
</div>



eiwo


@endsection