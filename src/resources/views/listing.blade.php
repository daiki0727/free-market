@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">
@endsection

@section('content')
    <h2 class="listing-heading">商品の出品</h2>

    <form class="listing__form" action="/item-listing" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="item-image-box">
            <!-- 画像選択ボタン -->
            <label class="item-picture__btn" for="item-picture__input">
                画像を選択する
            </label>
            <!-- 隠れたファイル入力 -->
            <input class="item-picture__input" id="item-picture__input"type="file" name="image_url" accept="image/*"
                style="display: none;">
        </div>

        <!-- 商品の詳細 -->
        <div class="item-detail__box">
            <label class="categories__label">カテゴリー</label>
            <input class="categories__input" type="text" name="categories" value="">
            @error('categories')
                <div class="error">{{ $message }}</div>
            @enderror
            <label class="condition__label">商品の状態</label>
            <input class="condition__input" type="text" name="conditions" value="">
            @error('conditions')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 商品名と説明 -->
        <div class="item-description__box">
            <label class="item-name__label">商品名</label>
            <input class="item-name__input" type="text" name="item_name" value="">
            @error('item_name')
                <div class="error">{{ $message }}</div>
            @enderror
            <label class="item-description__label">商品の説明</label>
            <input class="item-description__input" type="text" name="description" value="">
            @error('description')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 販売価格 -->
        <div class="price__box">
            <label class="price__label">販売価格</label>
            <input class="price__input" type="text" name="price"
                value="">
            @error('price')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 出品ボタン -->
        <button class="listing-btn" type="submit">出品する</button>
    </form>
@endsection
