<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="テキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @yield('css')
    @yield('title')
</head>

<body class="@yield('body-class')">
<header id="#top">
    <div class="header__left">
        <h1 class="header__logo">
            <a href="{{ route('top') }}"><img src="{{ asset('images/logo.svg') }}" alt="Web Entertainment Designのロゴ"></a>
        </h1>
        <nav class="header__menu">
            <ul>
                <li><a href="#news">NEWS</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#business">BUSINESS</a></li>
                <li><a href="#company">COMPANY</a></li>
                <li class="header__responsive-menu"><a href="{{ asset('contact') }}"></a><i class="fa-solid fa-envelope"></i></li>
            </ul>
        </nav>
    </div>
    <div class="header__contact">
        <a href="{{ route('contact') }}">お問い合わせ</a>
    </div>
</header>

<main>
    @yield('contents')
</main>

<footer>
    <div class="footer__wrapper">
        <div class="footer__top">
            <h1 class="footer__logo">
                <a href="#top"><img src="{{ asset('images/logo.svg') }}" alt="WED"></a>
            </h1>
            <div class="footer__info">
                <p class="footer__info--company-name">Web Entertainment Design Inc.</p>
                <address class="footer__info--address">
                    West Building 3F<br>
                    9-99 Sakuragaokacho Shibuya-ku<br>
                    Tokyo, Japan 150-0031<br>
                    T/99-9999-9999
                </address>
            </div>
        </div>
        <div class="footer__copy">
            <p>&copy; Web Entertainment Design Inc.</p>
        </div>
    </div>
</footer>
</body>

</html>