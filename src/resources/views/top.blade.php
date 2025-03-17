<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="テキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <title>Web Entertainment Design </title>
</head>

<body>
<header>
    <div class="header__left">
        <h1 class="header__logo">
            <a href="#"><img src="{{ asset('images/logo.svg') }}" alt="WED"></a>
        </h1>
        <nav class="header__menu">
            <ul>
                <li><a href="#news">NEWS</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#business">BUSINESS</a></li>
                <li><a href="#company">COMPANY</a></li>
            </ul>
        </nav>
    </div>
    <div class="header__contact">
        <a href="#">お問い合わせ</a>
    </div>
</header>

<main>
    <div class="main-visual">
        <img src="{{ asset('images/mainvisual.jpg') }}" alt="メインビジュアル">
    </div>
    <section id="news" class="news wrapper">
        <h2 class="news__title title">
            <a href="#">
                <span class="news__title-en en">NEWS</span>
                <span class="news__title-ja ja">ニュース</span>
            </a>
        </h2>
        <ul class="news__list">
            <li class="news__item">
                <span class="news__date">2021.01.01</span>
                <span class="news__tag">NEWS</span>
                <p class="news__text">タイトルタイトルタイトルタイトル</p>
            </li>
            <li class="news__item">
                <span class="news__date">2021.01.01</span>
                <span class="news__tag">NEWS</span>
                <p class="news__text">タイトルタイトルタイトルタイトル</p>
            </li>
            <li class="news__item">
                <span class="news__date">2021.01.01</span>
                <span class="news__tag">NEWS</span>
                <p class="news__text">タイトルタイトルタイトルタイトル</p>
            </li>
        </ul>
    </section>
</main>

<footer>
    <div class="footer__wrapper">
        <div class="footer__top">
            <h1 class="footer__logo">
                <a href="#"><img src="{{ asset('images/logo.svg') }}" alt="WED"></a>
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