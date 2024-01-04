<!-- 飲食店一覧ページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header')
<!-- 検索 -->
<form class="search-form" action="/search" method="get">
    @csrf
    <div class="search-form__item">
        <select class="search-form__item-select" name="region_keyword">
            <option value="">All area</option>
            @foreach($regions as $region)
            <option value="{{ $region['region'] }}">{{ $region['region'] }}</option>
            @endforeach
        </select>
        <select class="search-form__item-select--css" name="genre_keyword">
            <option value="">All genre</option>
            @foreach($genres as $genre)
            <option value="{{ $genre['genre'] }}">{{ $genre['genre'] }}</option>
            @endforeach
        </select>
        <input class="search-form__item-input" type="text" name="store_keyword" value="" placeholder="store name">
    </div>
    <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">Search ...</button>
    </div>
</form>
@endsection

@section('content')
<!-- 飲食店一覧ページ -->
<div class="card__group">
    <!-- 仙人 -->
    @forElse ($shops as $shop)
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/' . $shop->genre . '.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">{{$shop['store_name']}}</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#{{$shop['region']}}</p>
                <p class="card__content-tag-item card__content-tag-item--last">#{{$shop['genre']}}</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail/{{$shop->shop_id}}">詳しくみる</a>
                <a class="button-submit--width" href="/evaluation/{{$shop->shop_id}}">評価</a>
                <!-- 見た目が崩れないようにするため -->
                <form name="myForm" action="/favorite/remove" method="post">
                    <p class="hurt-red-button" src="" height="36px" width="36px"></p>
                </form>
                @if (Auth::check())

                <!-- ハートの切り替え方 -->
                <?php
                $flg = false;
                ?>
                @foreach($favoriteShops as $favoriteShop)

                @if($favoriteShop->store_name === $shop->store_name)
                <?php
                $flg = true;
                ?>
                @break
                @endif
                @endforeach

                <!-- $flgにfalseが入っていて上のハートの切り替えのところでお気に入りがあるときの処理でtrueを入れている -->
                @if($flg)
                <form name="myForm" action="/favorite/remove" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $favoriteShop->id }}">
                    <input class="hurt-red-button" type="image" src="{{ asset('img/hurt_red.png') }}" height="36px" width="36px">
                </form>
                @else
                <form action="/favorite" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="store_name" value="{{ $shop->store_name }}">
                    <input type="hidden" name="region" value="{{ $shop->region }}">
                    <input type="hidden" name="genre" value="{{ $shop->genre }}">
                    <input class='hurt-gray-button' type='image' src='img/hurt_gray.png' height='36px' width='36px'>
                </form>
                @endif
                @endif
            </div>
        </div>
    </div>
    @empty
    <p>no</p>
    @endforElse

    @endsection