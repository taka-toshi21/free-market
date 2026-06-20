@extends('layouts/app01')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="mypage__content">
    <div class="mypage__header">
        <div class="mypage__img-icon">
            <img src="" alt="">
        </div>
        <h2 class="mypage__header-text">{{ $user->name }}</h2>
        <a class="mypage__edit-button" href="/mypage/profile">プロフィールを編集</a>
    </div>
    <?php
    $page = $_GET['page'] ?? 'sell';
    ?>
    <div class="mypage__tab">
        <a href="?page=sell" class="{{ $page === 'sell' ? 'active' : '' }}">出品した商品</a>
        <a href="?page=buy" class="{{ $page === 'buy' ? 'active' : '' }}">購入した商品</a>
    </div>
    @if($page === 'sell')
    <div class="items__list">
        @foreach($sellItems as $sellItem)
        <div class="items__card">
            <a href="{{ route('itemDetail', ['item_id' => $sellItem->id]) }}" class="item__img">
                <img src="{{ asset('img/Armani+Mens+Clock.jpg') }}" alt="{{ $sellItem->name }}">
            </a>
            <p class="item__name">{{ $sellItem->name }}</p>
        </div>
        @endforeach
    </div>
    @endif

    @if($page === 'buy')
    <div class="items__list">
        @foreach($buyItems as $buyItem)
        <div class="items__card">
            <a href="{{ route('itemDetail', ['item_id' => $buyItem->id]) }}" class="item__img">
                <img src="{{ asset('img/Armani+Mens+Clock.jpg') }}" alt="{{ $buyItem->name }}">
            </a>
            <p class="item__name">{{ $buyItem->name }}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection