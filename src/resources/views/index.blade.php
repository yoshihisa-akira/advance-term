<!-- 飲食店一覧ページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header')
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
    <form name="myForm" action="/favorite" method="post">
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
                    <script>
                        document.write('<img class="hurt-button" src="img/hurt_gray.png" alt="" onclick="hurt()">')
                        var a = new Array("img/hurt_gray.png", "img/hurt_red.png");
                        var click = 0;

                        function hurt() {
                            if (click == 2) {
                                click = 0;
                            } else {
                                click++;
                            }
                            document.getElementsByClassName("hurt-button").src = a[click];
                            alert(document.getElementsByClassName("hurt-button").src)
                        }
                    </script>
                </div>
            </div>
        </div>
    </form>
    @empty
    <p>no</p>
    @endforElse
    @endsection