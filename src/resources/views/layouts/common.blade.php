<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Market</title>
    <link rel="stylesheet" href="{{ asset('css/reset/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <a href="/">
                <img class="logo" src="{{ asset('svg/logo.svg') }}" alt="サイトロゴ">
            </a>
        </div>
        @if (!in_array(Route::currentRouteName(), ['login', 'register', 'verify-email']))
            <div class="header__search">
                <form class="search-form" action="" method="GET">
                    <input class="search-input" type="text" name="query" placeholder="なにをお探しですか？">
                </form>
            </div>
            <nav class="header__nav">
                <ul class="nav-list">
                    @guest
                        <!-- 未ログイン時 -->
                        <li class="login-list"><a class="login-link" href="{{ route('login') }}">ログイン</a></li>
                        <li class="register-list"><a class="register-link" href="{{ route('register') }}">会員登録</a></li>
                    @endguest
                    @auth
                        <!-- ログイン時 -->
                        <li class="logout-list">
                            <form class="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="logout-btn" type="submit">ログアウト</button>
                            </form>
                        </li>
                        <li class="mypage-list"><a class="mypage-link" href="">マイページ</a></li>
                    @endauth
                    <li class="sell-list"><a class="sell-link" href="">出品</a></li>
                </ul>
            </nav>
        @endif
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
