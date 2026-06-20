<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common01.css') }}" />
    @yield('css')
    @livewireStyles
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                <img src="{{ asset('img/COACHTECHヘッダーロゴ.png') }}" alt="coachtech" width="65%" height="70%" class="header__logo-item">
            </a>
            @yield('guest')
            @auth
            <form class="search-form" action="">
                <div class="search-form__item">
                    <input class="search-form__item-input" type="text" placeholder="なにをお探しですか？">
                </div>
            </form>
            <nav>
                <ul class="header-nav">
                    <li class="header-nav__item">
                        <form action="/logout" method="post">
                            @csrf
                            <button class="header-nav__item-link">ログアウト</button>
                        </form>
                    </li>
                    <li class="header-nav__item">
                        <a class="header-nav__item-link" href="/mypage">マイページ</a>
                    </li>
                    <li class="header-nav__item">
                        <a class="header-nav__item-listing" href="/sell">出品</a>
                    </li>
                </ul>
            </nav>
            @endauth
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    @livewireScripts
</body>
</html>