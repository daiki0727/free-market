@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/item-detail.css') }}">
@endsection

@section('content')
    <div class="item__container">
        <div class="item-image__area">
            <img class="item-image" src="" alt="">
        </div>

        <div class="item-detail__area">

            <div class="item-top__box">
                <h1 class="item-name"></h1>
                <p class="brand-name"></p>
                <div class="prace__area"></div>
                <div class="favorite-comment__area"></div>
                <a class="buyer-btn" href="">購入する</a>
            </div>

            <div class="item-middle__box">
                <h2 class="item-description">商品説明</h2>
                <div class="description__area"></div>
            </div>

            <div class="item-bottom__box">
                <h2 class="item-info">商品の情報</h2>
                <div class="category__area"></div>
                <div class="condition__area"></div>
            </div>
        </div>
    </div>
@endsection
