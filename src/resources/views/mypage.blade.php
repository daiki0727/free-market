@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="head-box">

        <div class="image-area">
            <img class="profile-picture" src="">
        </div>
        <div class="name-area">
            <h3 class="user-name">{{-- {{ $user->name }} --}}仮：山田太郎</h3>
        </div>
        <a class="profile-btn" href="">プロフィールを編集</a>

    </div>

    <div class="foot-box">

        <a class="seller-btn" href="">出品した商品</a>
        <a class="purchase-btn" href="">購入した商品</a>

        <div id="items-container">
            {{-- @if ($items->isEmpty())
                <p>商品が見つかりません。</p>
            @else  --}}
            <div class="items-list">
                {{-- @foreach ($items as $item)  --}}
                <div class="item-card">
                    <a class="item-detail" href="">
                        <img class="item-image" src="{{-- {{ $item->image_url }} --}}" alt="{{-- {{ $item->name }}  --}}">
                    </a>
                </div>
                {{-- @endforeach  --}}
            </div>
            {{-- @endif  --}}
        </div>
    </div>

    </div>
@endsection
