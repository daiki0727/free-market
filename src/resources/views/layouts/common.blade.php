<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Market</title>
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__logo">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="サイトロゴ" class="logo">
            </a>
        </div>
    </header>

    <div class="header__search">
        <form action="" method="GET" class="search-form">
            <input type="text" name="query" placeholder="商品を検索" class="search-input">
            <button type="submit" class="search-button">検索</button>
        </form>
    </div>

        <nav class="header__nav">
      <ul class="nav-list">
        @guest
          <!-- 未ログイン時 -->
          <li><a href="">ログイン</a></li>
          <li><a href="">会員登録</a></li>
        @endguest
        @auth
          <!-- ログイン時 -->
          <li><a href="">マイページ</a></li>
        @endauth
        <li><a href="" class="sell-link">出品</a></li>
      </ul>
    </nav>


    <main>
        @yield('content')
    </main>
</body>

</html>
