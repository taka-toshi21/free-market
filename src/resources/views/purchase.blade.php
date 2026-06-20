@extends('layouts/app01')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase__content">
    <div class="purchase__top-area">
        <div class="purchase__item-block">
            <div class="purchase__item-img">
                <img src="" alt="">
            </div>
            <div class="purchase__item-info">
                <span class="purchase__item-name">{{ $item->name }}</span>
                <span class="purchase__item-price">¥{{ $item->price }}</span>
            </div>
        </div>
        <div class="purchase__table">
            <table>
                <tr>
                    <td>商品代金</td>
                    <td>¥{{ $item->price }}</td>
                </tr>
                <tr>
                    <td>支払い方法</td>
                    <td id="payment-method">ご選択下さい</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="purchase__bottom-area">
        <form action="{{ url('/purchase/' . $item->id) }}" method="post">
            @csrf
            <div class="purchase__info">
                <div class="purchase__group">
                    <div class="purchase__group-title">
                        <span>支払い方法</span>
                    </div>
                    <div class="purchase__group-content">
                        <select name="payment" id="payment">
                            <option value="">ご選択下さい</option>
                            <option value="コンビニ払い">コンビニ払い</option>
                            <option value="カード支払い">カード支払い</option>
                        </select>
                    </div>
                </div>
                <div class="purchase__group">
                    <div class="purchase__group-title">
                        <span>配送先</span>
                        <a href="{{ route('address', ['item_id' => $item->id]) }}">変更する</a>
                    </div>
                    <div class="purchase__group-content">
                        <span>〒{{ session('purchase_postal', auth()->user()->postal) }}</span>
                        <br>
                        <span>{{ session('purchase_address', auth()->user()->address) }}</span>
                        <br>
                        <span>{{ session('purchase_building', auth()->user()->building) }}</span>
                    </div>
                </div>
            </div>
            <div class="purchase__button">
                <button class="purchase__button-submit" type="submit">購入する</button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const paymentSelect = document.getElementById('payment');
    const paymentDisplay = document.getElementById('payment-method');

    paymentSelect.addEventListener('change', function () {
        paymentDisplay.textContent = this.value || 'ご選択下さい';
    });
});
</script>

@endsection