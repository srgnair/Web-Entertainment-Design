@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/top.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
@endsection

@section('title')
    <title>Web Entertainment Design - Contact -</title>
@endsection

@section('contents')

<section id="contact" class="contact wrapper">
    <h2 class="contact__title title">
        <a href="#">
            <span class="news__title-en en">Contact</span>
        </a>
    </h2>
    <p>お仕事のご依頼やご相談は下記のフォームからお問い合わせください。</p>
    <form action="#" class="contact__form">
        <div class="contact__form-item">
            <label for="name">Name<span>*</span></label>
            <input type="text" name="name">
        </div>
        <div class="contact__form-item">
            <label for="email">E-mail<span>*</span></label>
            <input type="email" name="email">
        </div>
        <div class="contact__form-item">
            <label for="message">Message<span>*</span></label>
            <textarea name="message" id="message"></textarea>
        </div>
        <button tyoe="submit">送信</button>
    </form>
</section>

@endsection