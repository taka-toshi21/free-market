@extends('layouts/app01')

@section('css')
<link rel="stylesheet" href="{{ asset('css/itemDetail.css') }}">
@endsection

@section('guest')
@guest
<ul class="header-nav">
    <li class="header-nav__item">
        <a class="header-nav__item-link" href="/login">ログイン</a>
    </li>
</ul>
@endguest
@endsection

@section('content')

<div class="itemDetail__content">
    <div class="itemDetail-img__area">
        <img src="{{ asset('img/Armani+Mens+Clock.jpg') }}" alt="{{ $item->name }}">
    </div>
    <div class="itemDetail-info__area">
        <div class="itemDetail-info__name">
            <h2>{{ $item->name }}</h2>
        </div>
        <div class="itemDetail-info__brand">
            <span>{{ $item->brand }}</span>
        </div>
        <div class="itemDetail-info__price">
            <span class="info__price-add">¥</span>
            <span class="info__price-value">{{ $item->price }}</span>
            <span class="info__price-add">(税込)</span>
        </div>
        <div class="itemDetail-info__logo">
            <div class="itemDetail-info__logo-box">
                <livewire:like-button :item="$item"/>
            </div>
            <div class="itemDetail-info__logo-box">
                <img src="{{ asset('img/ふきだしロゴ.png') }}" alt="">
                <span>{{ $item->comments->count() }}</span>
            </div>
        </div>
        @auth
        <div class="buy-form__button">
            <a href="{{ route('purchase', ['item_id' => $item->id]) }}" class="buy-form__button-submit">購入手続きへ</a>
        </div>
        @endauth
        <div class="itemDetail-info__group">
            <div class="itemDetail-info__group-title">
                <span class="info__title-item">商品説明</span>
            </div>
            <div class="info__content">
                <p class="info__description-text">{{ $item->description }}</p>
            </div>
        </div>
        <div class="itemDetail-info__group">
            <div class="itemDetail-info__group-title">
                <span class="info__title-item">商品の情報</span>
            </div>
            <div class="info__content">
                <dl class="info__data-list">
                    <dt class="info__data-title">カテゴリー</dt>
                    <dd class="info__data-content">
                        @foreach($item->categories as $category)
                        <span class="info__category-tug">
                            {{ $category->category }}
                        </span>
                        @endforeach
                    </dd>
                    <dt class="info__data-title">商品の状態</dt>
                    <dd class="info__data-content">{{ $item->status }}</dd>
                </dl>
            </div>
        </div>
        <livewire:comment-button :item="$item" />
    </div>
</div>

@endsection