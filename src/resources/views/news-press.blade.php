@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/news-press.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
@endsection

@section('title')
    <title>Web Entertainment Design - News &amp; Press -</title>
@endsection

@section('contents')

<section id="news-press" class="news-press wrapper">
    <h2 class="news-press__title title">
        <a href="#">
            <span class="news__title-en en">News &amp; Press</span>
        </a>
    </h2>
    <div class="news-press__tab">
        <a class="news-press__news-tab" href="#">ニュース</a>
        <a class="news-press__press-tab" href="#">プレスリリース</a>
    </div>
    <ul class="news__list">
        <li class="news__item">
            <span class="news__date">2021.01.01</span>
            <span class="news__tag">NEWS</span>
            <p class="news__text">ニュースタイトル１タイトル１タイトル１タイトル１タイトル１</p>
        </li>
        <li class="news__item">
            <span class="news__date">2021.01.01</span>
            <span class="news__tag">NEWS</span>
            <p class="news__text">ニュースタイトル１タイトル１タイトル１タイトル１タイトル１</p>
        </li>
        <li class="news__item">
            <span class="news__date">2021.01.01</span>
            <span class="news__tag">NEWS</span>
            <p class="news__text">ニュースタイトル１タイトル１タイトル１タイトル１タイトル１</p>
        </li>
        <li class="news__item">
            <span class="news__date">2021.01.01</span>
            <span class="news__tag">NEWS</span>
            <p class="news__text">ニュースタイトル１タイトル１タイトル１タイトル１タイトル１</p>
        </li>
        <li class="news__item">
            <span class="news__date">2021.01.01</span>
            <span class="news__tag">NEWS</span>
            <p class="news__text">ニュースタイトル１タイトル１タイトル１タイトル１タイトル１</p>
        </li>
    </ul>
</section>

@endsection