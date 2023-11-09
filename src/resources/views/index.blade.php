<!-- 飲食店一覧ページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<!-- 飲食店一覧ページ -->

<div class="card__group">
    <!-- 仙人 -->
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
            </div>
        </div>
    </div>

    <!-- 牛助 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/yakiniku.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">牛助</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#大阪府</p>
                <p class="card__content-tag-item card__content-tag-item--last">#焼肉</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 戦慄 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/izakaya.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">戦慄</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#福岡県</p>
                <p class="card__content-tag-item card__content-tag-item--last">#居酒屋</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- ルーク -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/italian.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">ルーク</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#イタリアン</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 志摩屋 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/ramen.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">志摩屋</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#福岡県</p>
                <p class="card__content-tag-item card__content-tag-item--last">#ラーメン</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 香 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/yakiniku.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">香</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#焼肉</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- JJ -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/italian.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">JJ</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#大阪府</p>
                <p class="card__content-tag-item card__content-tag-item--last">#イタリアン</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- らーめん極み -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/ramen.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">らーめん極み</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#ラーメン</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 鳥雨 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/izakaya.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">鳥雨</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#大阪府</p>
                <p class="card__content-tag-item card__content-tag-item--last">#居酒屋</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 築地色合 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/sushi.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">築地色合</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#寿司</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 晴海 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/yakiniku.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">晴海</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#大阪府</p>
                <p class="card__content-tag-item card__content-tag-item--last">#焼肉</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 三子 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/yakiniku.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">三子</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#福岡県</p>
                <p class="card__content-tag-item card__content-tag-item--last">#焼肉</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 八戒 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/izakaya.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">八戒</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#居酒屋</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 福助 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/sushi.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">福助</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#大阪府</p>
                <p class="card__content-tag-item card__content-tag-item--last">#寿司</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- ラー北 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/ramen.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">ラー北</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#ラーメン</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 翔 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/izakaya.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">翔</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#居酒屋</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 経緯 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/sushi.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">経緯</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#寿司</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 漆 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/yakiniku.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">漆</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#東京都</p>
                <p class="card__content-tag-item card__content-tag-item--last">#焼肉</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- THE TOOL -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/italian.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">THE TOOL</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#福岡県</p>
                <p class="card__content-tag-item card__content-tag-item--last">#イタリアン</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>

    <!-- 木船 -->
    <div class="card">
        <div class="card__img">
            <img src="{{ asset('img/sushi.jpg') }}" alt="" width="280px" height="150px">
        </div>
        <div class="card__content">
            <div class="card__content-cat">木船</div>
            <div class="card__content-tag">
                <p class="card__content-tag-item">#大阪府</p>
                <p class="card__content-tag-item card__content-tag-item--last">#寿司</p>
            </div>
            <div class="button">
                <a class="button-submit" href="/detail">詳しくみる</a>
            </div>
        </div>
    </div>
</div>
@endsection