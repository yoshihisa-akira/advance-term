<!-- ログイン状態のメニューページ -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/menu1.css') }}" />
</head>

<body>
    <div class="menu__content">
        <ul style="list-style: none;">
            <li><a href="/">Home</a></li>
            <form class="form" action="/logout" method="post">
                @csrf
                <button class="menu__button">Logout</button>
            </form>
            <li><a href="/mypage">Mypage</a></li>
        </ul>
    </div>
</body>

</html>