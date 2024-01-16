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
        <form id="form" class="form" action="/detail" method="post">
            @csrf
            <h2 class="reserve__title">予約</h2>

            <input id="reserved_date" class="reserved_date" name="reserved_date" type="text" value="" placeholder="2023/04/01">
            <div class="form__error">
                @error('reserved_date')
                {{ $message }}
                @enderror
            </div>
            <input id="reserved_time" class="reserved_time" name="reserved_time" type="text" value="" placeholder="17:00">
            @error('reserved_time')
            {{ $message }}
            @enderror
            <input id="reserved_num" class="reserved_num" name="reserved_num" type="text" value="" placeholder="1人" onsubmit="">
            @error('reserved_num')
            {{ $message }}
            @enderror
            <input type="hidden" name="reserved_shop" value="{{ $shop->store_name }}">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="reserved__group">
                <div class="reserved__group-flex">
                    <p class="text">Shop</p>
                    <p class="text">{{ $shop->store_name }}</p>
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Date</p>
                    <p id="Date" class="text--width"></p>
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Time</p>
                    <p id="Time" class="text"></p>
                </div>
                <div class="reserved__group-flex">
                    <p class="text">Number</p>
                    <p id="Num" class="text"></p>
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">予約する</button>
            </div>
        </form>
    </div>
    @endif
</div>

<script>
    document.getElementById('reserved_date').addEventListener('keydown', enterKeyPress);
    document.getElementById('reserved_time').addEventListener('keydown', enterKeyPress);
    document.getElementById('reserved_num').addEventListener('keydown', enterKeyPress);

    function enterKeyPress(event) {
        if (event.key === 'Enter') {
            // 再読み込み防止
            event.preventDefault();
            // 入力フォームの内容を取得
            let reservedDate = document.getElementById('form').reserved_date.value;
            let reservedTime = document.getElementById('form').reserved_time.value;
            let reservedNum = document.getElementById('form').reserved_num.value;
            // 入力内容を画面に表示
            document.getElementById('Time').textContent = `${reservedTime}`;
            document.getElementById('Date').textContent = `${reservedDate}`;
            document.getElementById('Num').textContent = `${reservedNum}`;
        }
    }
</script>

@endsection