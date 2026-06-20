@extends('layouts/app01')

@section('css')
<link rel="stylesheet" href="{{ asset('css/market.css') }}">
@endsection

@section('guest')
@guest
<ul class="header-nav">
    <li class="header-nav__item">
        <a class="header-nav__item-link" href="/register">会員登録</a>
    </li>
    <li class="header-nav__item">
        <a class="header-nav__item-link" href="/login">ログイン</a>
    </li>
</ul>
@endguest
@endsection

@section('content')
<?php
$page = $_GET['page'] ?? 'recommend';
?>
<div class="market__content">
    <div class="market__tab">
        <a href="?page=recommend" class="{{ $page === 'recommend' ? 'active' : '' }}">おすすめ</a>
        <a href="?page=mylist" class="{{ $page === 'mylist' ? 'active' : '' }}">マイリスト</a>
    </div>
    @if($page === 'recommend')
    <div class="items__list">
        @foreach($Items as $item)
        <div class="items__card">
            @if($item->purchase)
            <div class="item__img">
                <img src="{{ asset('img/Armani+Mens+Clock.jpg') }}" alt="{{ $item->name }}" class="item__img-content">
                <span class="item__sold">SOLD OUT</span>
            </div>
            <p class="item__name">{{ $item->name }}</p>
            @else
            <a href="{{ route('itemDetail', ['item_id' => $item->id]) }}" class="item__img">
                <img src="{{ asset('img/Armani+Mens+Clock.jpg') }}" alt="{{ $item->name }}" class="item__img-content">
            </a>
            <p class="item__name">{{ $item->name }}</p>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    @if($page === 'mylist')
    <div class="items__list">
        @foreach($likes as $like)
        <div class="items__card">
            <a href="{{ route('itemDetail', ['item_id' => $like->id]) }}" class="item__img">
                <img src="{{ asset('img/Armani+Mens+Clock.jpg') }}" alt="{{ $like->name }}">
            </a>
            <p class="item__name">{{ $like->name }}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection