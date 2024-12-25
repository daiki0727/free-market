@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="select-continer">
        <form method="GET" action="{{ route('mypage') }}" class="tab-form">
            <button class="recommend-btn {{ $tab === 'recommend' ? 'active-tab' : '' }}" type="submit" name="tab" value="recommend">
                おすすめ
            </button>
            <button class="mylist-btn {{ $tab === 'mylist' ? 'active-tab' : '' }}" type="submit" name="tab"
                value="mylist">
                マイリスト
            </button>
        </form>
    </div>

    <div class="items-container">
        @if ($items->isEmpty())
            <p>商品がありません。</p>
        @else
            @foreach ($items as $item)
                <div class="item-card">
                    <a class="item-detail" href="{{ route('item-detail', ['id' => $item->id]) }}">
                        <img class="item-image"
                            src="{{ Str::startsWith($item->image_url, 'http') ? $item->image_url : asset('storage/' . $item->image_url) }}"
                            alt="{{ $item->item_name }}">
                    </a>
                </div>
            @endforeach
        @endif
    </div>

@endsection
