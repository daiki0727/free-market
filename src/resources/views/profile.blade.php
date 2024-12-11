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
            <img class="profile-picture" src="{{-- {{ asset('storage/profile_pictures/' . $user->profile_picture) }} --}}"
                alt="Profile Picture">
            <input type="file" name="profile_picture" accept="image/*" class="file-input">
        </div>

        <!-- ユーザー名 -->
        <div class="user-name__box">
            <h3 class="nick-name__heading">ユーザー名</h3>
            <input class="nick-name__input" type="text" name="nick_name" value="{{-- {{ $user->name }} --}}">
        </div>

        <!-- 郵便番号 -->
        <div class="post-code__box">
            <h3 class="post-code__heading">郵便番号</h3>
            <input class="post-code__input" type="text" name="post_code" value="{{-- {{ $user->post_code }} --}}">
        </div>

        <!-- 住所 -->
        <div class="address__box">
            <h3 class="address__heading">住所</h3>
            <input class="address__input" type="text" name="address" value="{{-- {{ $user->address }} --}}">
        </div>

        <!-- 建物名 -->
        <div class="building__box">
            <h3 class="building__heading">建物名</h3>
            <input class="building__input" type="text" name="building" value="{{-- {{ $user->building }} --}}">
        </div>

        <!-- 更新ボタン -->
        <button type="submit" class="update__btn">更新する</button>
    </form>
@endsection
