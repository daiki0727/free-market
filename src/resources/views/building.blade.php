@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/building.css') }}">
@endsection

@section('content')
    <h2 class="building-heading">住所の変更</h2>

    <form class="building__form" action="/change-building" method="POST">
        @csrf

        <!-- 郵便番号 -->
        <div class="post-code__box">
            <label class="post-code__label">郵便番号</label>
            <input class="post-code__input" type="text" name="post_code"
                value="{{ old('post_code', Auth::user()->profile->post_code) }}">
            @error('post_code')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 住所 -->
        <div class="address__box">
            <label class="address__label">住所</label>
            <input class="address__input" type="text" name="address"
                value="{{ old('address', Auth::user()->profile->address) }}">
            @error('address')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 建物名 -->
        <div class="building__box">
            <label class="building__label">建物名</label>
            <input class="building__input" type="text" name="building"
                value="{{ old('building', Auth::user()->profile->building) }}">
            @error('building')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 変更ボタン -->
        <button class="update-btn" type="submit">変更する</button>
    </form>
@endsection
