<!DOCTYPE HTML>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection" content="telephone=no">
        <meta name="robots" content="noindex,nofollow">

        <meta name="description" content="ポータル">

        <!-- OGP設定 -->


        <!-- ファビコン設定 -->
        <link rel="icon" href="src/images/favicons/favicon.ico">
        <link rel="apple-touch-icon" type="image/png" href="src/images/favicons/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="src/images/favicons/icon-192x192.png">

        <meta charset="UTF-8">
        <title>@yield('title')ポータルサイト</title>
        <meta name="description" itemprop="description" content="@yield('description')">
        <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
        <link href="/css/star/layout.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="/css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <header class="header">
        <div class="header-top">
            <div class="wrap">
            </div><!-- /wrap -->
            <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
            </div>
        </div><!-- /header-top -->

        <nav class="gnav">
            <ul class="gnav__list wrap">
            <li class="gnav__item"><a href="#">information</a></li>
            <li class="gnav__item"><a href="#">search</a></li>
            <li class="gnav__item"><a href="#">blog</a></li>
            <li class="gnav__item"><a href="#">wiki</a></li>
            <li class="gnav__item"><a href="#">setting</a></li>
            </ul>
        </nav><!-- /gnav -->
        </header>
            @yield('index')
            @yield('sample')
        <footer class="footer">
        <div class="wrap">
            <p class="copyright"><small>&copy; 2020</small></p>
        </div>
        </footer>
      <!-- JS -->
      {{-- <script src="js/jquery-1.11.3.min.js"></script>
      <script src="js/main.js"></script> --}}
      <script src="{{ asset('js/main.js') }}"></script>
    </body>

    </html>
