<!-- ログインページ -->
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login-form__content">
    <div class="login-form__heading">
        <h3 class='login-form__heading__title'>Login</h3>
    </div>
    <form class="form">
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
                    @error('mail')
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
            <button class="form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection