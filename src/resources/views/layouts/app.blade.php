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
            <a class="header__logo" href="/">

            </a>
        </div>
        <div class="header__title">
            <h1><a href="/menu1">Rese</a></h1>
        </div>
    </header>

    @else
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">

            </a>
        </div>
        <div class="header__title">
            <h1><a href="/menu2">Rese</a></h1>
        </div>
    </header>

    @endif

    <main>
        @yield('content')
    </main>
</body>

</html>