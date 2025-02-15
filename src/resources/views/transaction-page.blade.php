@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/transaction-page.css') }}">
@endsection

@section('content')
    <div class="transaction-page__container">
        <div class="left__container">
            <div class="payment-top__area">
                <div class="item-image__box">
                    <img class="item-image"
                        src="{{ Str::startsWith($item->image_url, 'http') ? $item->image_url : asset('storage/' . $item->image_url) }}"
                        alt="{{ $item->item_name }}">
                </div>

                <div class="name-price__box">
                    <h1 class="item-name">{{ $item->item_name }}</h1>
                    <div class="item-prace">
                        <span class="prace__label">¥</span>
                        <span class="prace__number">{{ number_format($item->price) }}</span>
                    </div>
                </div>
            </div>

            <div class="payment-middle__area">
                <h2 class="payment-method__heading">支払方法</h2>
                <a href="{{ route('payment.form') }}" class="payment-method__change">変更する</a>
            </div>

            <div class="payment-bottom__area">
                <h2 class="shipping-address__heading">配送先</h2>
                <a href="{{ route('building') }}" class="shipping-address__change">変更する</a>
            </div>
        </div>

        <div class="right__container">
            <div class="confirm__area">
                <div class="confirm-price__box">
                    <span class="confirm-prace__label">商品代金</span>
                    <span class="confirm-prace__number">¥{{ number_format($item->price) }}</span>
                </div>
                <div class="confirm-payment__box">
                    <span class="confirm-payment__label">支払代金</span>
                    <span class="confirm-prace__number">¥{{ number_format($item->price) }}</span>
                </div>
                <div class="confirm-payment-methmod__box">
                    <span class="confirm-payment-method__label">支払方法</span>
                    <span class="confirm-prace-method__name">{{ $paymentMethod->payment_method ?? '未設定' }}</span>
                </div>
            </div>
            <form class="buyer_form" action="{{ route('transaction-page') }}" method="GET">
                @csrf
                <input type="hidden" name="item_id" value="{{ $item->id }}">
                <button class="buyer-btn">購入する</button>
            </form>
        </div>

    </div>
@endsection
