@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/item-detail.css') }}">
@endsection

@section('content')
    <div class="item__container">
        <div class="item-image__area">
            <img class="item-image"
                src="{{ Str::startsWith($item->image_url, 'http') ? $item->image_url : asset('storage/' . $item->image_url) }}"
                alt="{{ $item->item_name }}">
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
                    <span class="prace__number">{{ number_format($item->price) }}</span>
                </div>

                <div class="favorite-comment__area">
                    <div class="favorite__box">
                        @auth
                            <form action="{{ route('items-favorite-toggle', ['item' => $item->id]) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                <input type="hidden" name="item_id" value="{{ $item->id }}">
                                <button type="submit"
                                    class="favorite-btn {{ auth()->check() && $item->isFavoritedBy(auth()->user()) ? 'favorited' : '' }}">
                                    ★
                                </button>
                            </form>
                            <div class="favorite-count">
                                {{ $item->favorites_count }} <!-- お気に入りの数 -->
                            </div>
                        @endauth
                    </div>

                    <div class="comment__box">
                        <!-- コメントボタン -->
                        <a class="comment-btn" href="{{-- {{ route('comments.index', ['item' => $item->id]) }} --}}">
                            💬
                        </a>
                        <div class="comment-count">
                            {{ $item->comments_count }} <!-- コメントの数 -->
                        </div>
                    </div>
                </div>

                <form class="buyer_form" action="{{ route('transaction-page') }}" method="GET">
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $item->id }}">
                    <button class="buyer-btn">購入する</button>
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
