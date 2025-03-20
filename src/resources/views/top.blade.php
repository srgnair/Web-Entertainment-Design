@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
@endsection

@section('title')
    <title>Web Entertainment Design</title>
@endsection

@section('body-class', 'top')

@section('contents')
<div class="main-visual">
    <img src="{{ asset('images/mainvisual.jpg') }}" alt="社内風景">
</div>

<section id="news" class="news wrapper">
    <h2 class="news__title title">
        <a href="{{ route('news') }}">
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

<section id="about" class="about">
    <div class="about__image">
        <img src="{{ asset('images/about.jpg') }}" alt="">
    </div>
    <div class="about__text">
        <h2 class="about__title title">
            <a href="#">
                <span class="about__title-en en">ABOUT</span>
                <span class="about__title-ja ja">私たちについて</span>
            </a>
        </h2>
        <p class="about__description">
            テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト
        </p>
        <p class="about__description">
            テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト
        </p>
        <p class="about__description">
            テキストテキストテキストテキストテキストテキスト テキストテキストテキストテキストテキストテキスト
        </p>
    </div>
</section>

<section id="business" class="business wrapper">
    <h2 class="business__title title">
        <a href="#">
            <span class="business__title-en en">BUSINESS</span>
            <span class="business__title-ja ja">事業内容</span>
        </a>
    </h2>
    <div class="business__container">
        <div class="business__left">
            <div class="business__card">
                <h3><span>-</span>Web制作・マーケティング</h3>
                <img src="{{ asset('images/business1.jpg') }}" alt="事業内容のイメージ画像">
            </div>
            <div class="business__card">
                <h3><span>-</span>インターネットメディア事業</h3>
                <img src="{{ asset('images/business2.jpg') }}" alt="事業内容のイメージ画像">
            </div>
        </div>
        <div class="business__right">
            <div class="business__card">
                <h3><span>-</span>プロモーション企画・制作</h3>
                <img src="{{ asset('images/business3.jpg') }}" alt="事業内容のイメージ画像">
            </div>
            <div class="business__card">
                <h3><span>-</span>ソーシャル企画・運営</h3>
                <img src="{{ asset('images/business4.jpg') }}" alt="事業内容のイメージ画像">
            </div>
        </div>
    </div>
</section>

<section id="company" class="company wrapper">
    <div class="company__container">
        <h2 class="company__title title">
            <a href="#">
                <span class="company__title-en en">COMPANY</span>
                <span class="company__title-ja ja">当社情報</span>
            </a>
        </h2>
        <dl class="company__list">
            <div class="company__list-item">
                <dt>会社名</dt>
                <dd>ウェブエンターテイメントデザイン株式会社</dd>
            </div>

            <div class="company__list-item">
                <dt>所在地</dt>
                <dd>東京都渋谷区桜丘町99-9 West Building 3F</dd>
            </div>

            <div class="company__list-item">
                <dt>代表</dt>
                <dd>ＸＸＸＸＸＸ</dd>
            </div>

            <div class="company__list-item">
                <dt>設立</dt>
                <dd>2021年1月1日</dd>
            </div>

            <div class="company__list-item">
                <dt>資本金</dt>
                <dd>3,000,000円</dd>
            </div>

            <div class="company__list-item">
                <dt>事業内容</dt>
                <div class="company__column-item">
                    <dd>Web制作・マーケティング</dd>
                    <dd>インターネットメディア事業</dd>
                    <dd>プロモーション企画・制作</dd>
                    <dd>ソーシャル企画・運営</dd>
                </div>
            </div>
        </dl>

        <div class="company__image">
            <img src="{{ asset('images/company.jpg') }}" alt="社内風景">
        </div>
    </div>
</section>
@endsection