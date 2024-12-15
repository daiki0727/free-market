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
        <a class="seller-btn" href="">出品した商品</a>
        <a class="purchase-btn" href="">購入した商品</a>
    </div>

    <div class="items-container">
        @foreach ($items as $item)
            <div class="item-card">
                <a class="item-detail" href="">
                    <img class="item-image" src="{{ $item->image_url }}" alt="{{ $item->name }}">
                </a>
            </div>
        @endforeach
    </div>
@endsection
