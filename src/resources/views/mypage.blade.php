@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="profile-container">
        <div class="image-area">
            <img class="profile-picture" src="{{ Auth::user()->profile->image_url }}">
        </div>
        <div class="name-area">
            <h2 class="user-name">{{ $user->name }}</h2>
        </div>
        <a class="profile-btn" href="{{ route('profile') }}">プロフィールを編集</a>
    </div>

    <div class="select-continer">
        <form method="GET" action="{{ route('mypage') }}" class="tab-form">
            <button type="submit" name="tab" value="seller"
                class="seller-btn {{ $tab === 'seller' ? 'active-tab' : '' }}">
                出品した商品
            </button>
            <button type="submit" name="tab" value="purchased"
                class="purchase-btn {{ $tab === 'purchased' ? 'active-tab' : '' }}">
                購入した商品
            </button>
        </form>
    </div>

    <div class="items-container">
        @if ($items->isEmpty())
            <p>商品がありません。</p>
        @else
            @foreach ($items as $item)
                <div class="item-card">
                    <a class="item-detail" href="">
                        <img class="item-image" src="{{ Str::startsWith($item->image_url, 'http') ? $item->image_url : asset('storage/' . $item->image_url) }}" alt="{{ $item->item_name }}">
                    </a>
                </div>
            @endforeach
        @endif
    </div>
@endsection
