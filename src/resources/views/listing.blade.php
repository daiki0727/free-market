@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">
@endsection

@section('content')
    <h2 class="listing-heading">商品の出品</h2>

    <form class="listing__form" action="{{ route('item-listing') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label class="item-image__label">商品画像</label>
        <div class="item-image-box">
            <!-- 画像選択ボタン -->
            <label class="item-picture__btn" for="item-picture__input">
                画像を選択する
            </label>
            <!-- 隠れたファイル入力 -->
            <input class="item-picture__input" id="item-picture__input"type="file" name="image_url" accept="image/* "style="display: none;" alt="">
        </div>

        <!-- 商品の詳細 -->
        <h2 class="item-detail__heading">商品の詳細</h2>
        <div class="item-detail__box">
            <div class="categories__area">
                <label class="categories__label">カテゴリー</label>

                <select class="categories__select" type="text" name="category_id" value="{{ old('category_id') }}">
                    <option class="select-head">選択してください</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="condition__area">
                <label class="condition__label">商品の状態</label>
                <select class="condition__select" type="text" name="condition_id" value="{{ old('condition_id') }}">
                    <option value="">選択してください</option>
                    @foreach ($conditions as $condition)
                        <option value="{{ $condition->id }}">{{ $condition->condition_name }}</option>
                    @endforeach
                </select>
                @error('condition_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- 商品名と説明 -->
        <h2 class="item-description__heading">商品名と説明</h2>
        <div class="item-description__box">
            <div class="brand__area">
                <label class="brand__label">ブランド名</label>
                <select class="brand__select" type="text" name="brand_id" value="{{ old('brand_id') }}">
                    <option value="">選択してください</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                    @endforeach
                </select>
                @error('brand_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="item-name__area">
                <label class="item-name__label">商品名</label>
                <input class="item-name__input" type="text" name="item_name" value="{{ old('item_name') }}">
                @error('item_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="item-description__area">
                <label class="item-description__label">商品の説明</label>
                <textarea class="item-description__textarea" name="description">{{ old('description') }}</textarea>
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
                <input class="price__input" type="number" name="price" value="{{ old('price') }}" placeholder="¥"
                    min="1" step="1">
                @error('price')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- 出品ボタン -->
        <button class="listing-btn" type="submit">出品する</button>
    </form>
@endsection
