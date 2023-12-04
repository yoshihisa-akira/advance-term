<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    @yield('css')
</head>

<body>
    @if (Auth::check())
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/menu1">
                <img class="logo" src="{{ asset('img/menu_logo.png') }}" alt="" width="40px" height="40px">
            </a>
            <div class="header__title">
                <h1><a href="/">Rese</a></h1>
            </div>
        </div>
        @yield('header')
    </header>

    @else
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/menu2">
                <img class="logo" src="{{ asset('img/menu_logo.png') }}" alt="" width="40px" height="40px">
            </a>
            <div class="header__title">
                <h1><a href="/">Rese</a></h1>
            </div>
        </div>
        @yield('header')
    </header>

    @endif

    <main>
        @yield('content')
    </main>
</body>

</html>