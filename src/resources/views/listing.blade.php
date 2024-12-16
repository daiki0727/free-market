@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">
@endsection

@section('content')
    <h2 class="listing-heading">商品の出品</h2>

    <form class="listing__form" action="/item-listing" method="POST" enctype="multipart/form-data">
        @csrf

        <label class="item-image__label">商品画像</label>
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
        <h2 class="item-detail__heading">商品の詳細</h2>
        <div class="item-detail__box">
            <div class="categories__area">
                <label class="categories__label">カテゴリー</label>
                <input class="categories__input" type="text" name="categories" value="">
                @error('categories')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="condition__area">
                <label class="condition__label">商品の状態</label>
                <input class="condition__input" type="text" name="conditions" value="">
                @error('conditions')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- 商品名と説明 -->
        <h2 class="item-description__heading">商品名と説明</h2>
        <div class="item-description__box">
            <div class="item-name__area">
                <label class="item-name__label">商品名</label>
                <input class="item-name__input" type="text" name="item_name" value="">
                @error('item_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="item-description__area">
                <label class="item-description__label">商品の説明</label>
                <textarea class="item-description__textarea" type="text" name="description" value=""></textarea>
                @error('description')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- 販売価格 -->
        <h2 class="price__heading">販売価格</h2>
        <div class="price__box">
            <div class="price__area">
                <label class="price__label">販売価格</label>
                <input class="price__input" type="text" name="price" value="" placeholder="¥">
                @error('price')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- 出品ボタン -->
        <button class="listing-btn" type="submit">出品する</button>
    </form>
@endsection
