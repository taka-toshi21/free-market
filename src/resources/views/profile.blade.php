@extends('layouts/app01')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile-form__content">
    <div class="profile-form__header">
        <h2>プロフィール設定</h2>
    </div>
    <form class="form" action="">
        <div class="form__img">
            <div class="form__img-icon">
                <img src="" alt="">
            </div>
            <div class="img-select__button">
                <button class="img-select__button-submit">画像を選択する</button>
            </div>
        </div>
    </form>
    <form class="form" action="/mypage/profile" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">ユーザー名</span>
            </div>
            <div class="form__input-text">
                <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">郵便番号</span>
            </div>
            <div class="form__input-text">
                <input type="text" name="postal" value="{{ old('postal', auth()->user()->postal) }}">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">住所</span>
            </div>
            <div class="form__input-text">
                <input type="text" name="address" value="{{ old('address', auth()->user()->address) }}">
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label-item">建物</span>
            </div>
            <div class="form__input-text">
                <input type="text" name="building" value="{{ old('building', auth()->user()->building) }}">
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">更新する</button>
        </div>
    </form>
</div>
@endsection