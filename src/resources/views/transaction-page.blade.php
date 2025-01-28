@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/transaction-page.css') }}">
@endsection

@section('content')
    <div class="transaction__container">
        <div class="payment-top__area">
            <div class="item-image__box">
                <img class="item-image" src="{{ asset($item->image_url) }}" alt="{{ $item->item_name }}">
            </div>

            <div class="name-price__box">
                <h1 class="item-name">{{ $item->item_name }}</h1>
                <div class="item-prace">
                    <span class="prace__label">¥</span>
                    <span class="prace__name">{{ number_format($item->price) }}</span>
                </div>
            </div>
        </div>

        <div class="payment-middle__area">
            <h2 class="payment-method__heading">支払方法</h2>
        </div>

        <div class="payment-bottom__area">
            <h2 class="shipping-address_heading">配送先</h2>
        </div>

    </div>

    @livewire('transaction')
@endsection
