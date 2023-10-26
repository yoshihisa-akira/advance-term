<!-- 会員登録ページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h3 class='register-form__heading__title'>Registration</h3>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-icon">
                <img src="img/user.png" alt="人物" width="256px" height="256px">
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Username" />
                </div>
                <!-- エラー文実装したら
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
                -->
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-icon">
                <img src="images/メールの無料アイコン.png" alt="メール" width="50px" height="40px">
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                </div>
                <!-- エラー文実装したら
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
                -->
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-icon">
                <img src="images/カギアイコン.png" alt="カギ" width="50px" height="40px">
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="Password" />
                </div>
                <!-- エラー文実装したら
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
                -->
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection