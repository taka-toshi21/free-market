@extends('layouts/app01')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell__content">
    <div class="sell__header">
        <h2>商品の出品</h2>
    </div>
    <form class="form" action="/sell" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__title-item">商品画像</span>
            </div>
            <div class="form__img-area">
                <div class="form__img-display">
                    <img id="preview" src="" alt="">
                </div>
                <input type="file" name="image" id="image" accept="image/*" hidden>
                <div class="img-upload__button">
                    <label for="image" class="img-upload__button-submit">画像を選択する</label>
                </div>
            </div>
        </div>
        <div class="form__chapter-title">
            <span class="form__chapter-item">商品の詳細</span>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__title-item">カテゴリー</span>
            </div>
            <div class="form__tag">
                @foreach($categories as $category)
                <div class="form__tag-list">
                    <label class="form__tag-content">
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                        <span>{{ $category->category }}</span>
                    </label>
                </div>
                @endforeach
            </div>
            <div class="form__error">
                @error('categories[]')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__title-item">商品の状態</span>
            </div>
            <div class="form__group-select">
                <select name="status">
                    <option value="">選択してください</option>
                    <option value="良好">良好</option>
                    <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
                    <option value="やや傷や汚れあり">やや傷や汚れあり</option>
                    <option value="状態が悪い">状態が悪い</option>
                </select>
                <div class="form__error">
                    @error('status')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__chapter-title">
            <span class="form__chapter-item">商品名と説明</span>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__title-item">商品名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="name">
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__title-item">ブランド名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-text">
                    <input type="text" name="brand">
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__title-item">商品の説明</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-textarea">
                    <textarea name="description"></textarea>
                </div>
                <div class="form__error">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__title-item">販売価格</span>
            </div>
            <div class="form__group-content">
                <div class="form__input-price">
                    <input type="text" name="price">
                </div>
                <div class="form__error">
                    @error('price')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">出品する</button>
        </div>
    </form>
</div>
@endsection
