@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/item-detail.css') }}">
@endsection

@section('content')
    <div class="item__container">
        <div class="item-image__area">
            <img class="item-image" src="{{ asset($item->image_url) }}" alt="{{ $item->item_name }}">
        </div>

        <div class="item-detail__area">

            <div class="item-top__box">
                <h1 class="item-name">{{ $item->item_name }}</h1>
                <div class="brand__area">
                    <span class="brand__label">ブランド名：</span>
                    <span class="brand__name">{{ $item->brand->brand_name }}</span>
                </div>
                <div class="prace__area">
                    <span class="prace__label">¥</span>
                    <span class="prace__name">{{ number_format($item->price) }}</span>
                </div>
                <div class="favorite-comment__area">
                    {{-- お気に入り・コメントボタンの実装（数とコメントボタンはコメントページへ飛べる） --}}
                </div>
                <form class="buyer_form">
                    @csrf
                    <a class="buyer-btn" href="{{-- /buy/{{ $item->id }} --}}">購入する</a>
                </form>
            </div>

            <div class="item-middle__box">
                <h2 class="item-description">商品説明</h2>
                <div class="color__area">
                    <span class="color__label">カラー：</span>
                    <span class="color__name">{{ $item->color->color_name }}</span>
                </div>
                <div class="description__area">{{ $item->description }}</div>
            </div>

            <div class="item-bottom__box">
                <h2 class="item-info">商品の情報</h2>
                <div class="category__area">
                    <span class="category__label">カテゴリー：</span>
                    <span class="category__name">{{ $item->category->category_name }}</span>
                </div>
                <div class="condition__area">
                    <span class="condition__label">商品の状態：</span>
                    <span class="condition__name">{{ $item->condition->condition_name }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
