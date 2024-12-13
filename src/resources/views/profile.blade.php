@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
    <h2 class="set-heading">プロフィール設定</h2>

    <form class="profile-update__form" action="/update-profile" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- プロフィール画像と変更ボタン -->
        <div class="image-box">
            <img class="profile-picture" src="">
            <label class="profile-picture__btn" for="profile-picture__input">
                画像を選択する
            </label>
            <input class="profile-picture__input" type="file" name="image_url" accept="image/*">
        </div>

        <!-- ユーザー名 -->
        <div class="user-name__box">
            <label class="nick-name__label">ユーザー名</label>
            <input class="nick-name__input" type="text" name="nick_name" value="{{-- {{ $user->name }} --}}">
            @error('nick-name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 郵便番号 -->
        <div class="post-code__box">
            <label class="post-code__label">郵便番号</label>
            <input class="post-code__input" type="text" name="post_code" value="{{-- {{ $user->post_code }} --}}">
            @error('post_code')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 住所 -->
        <div class="address__box">
            <label class="address__label">住所</label>
            <input class="address__input" type="text" name="address" value="{{-- {{ $user->address }} --}}">
            @error('address')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 建物名 -->
        <div class="building__box">
            <label class="building__label">建物名</label>
            <input class="building__input" type="text" name="building" value="{{-- {{ $user->building }} --}}">
            @error('building')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <!-- 更新ボタン -->
        <button class="update-btn" type="submit">更新する</button>
    </form>
@endsection
