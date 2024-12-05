@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')

    <div class="register-container">
        <h1 class="register-title">会員登録</h1>
        <form class="register-form" action="{{ route('register') }}" method="POST">
            @csrf

            <div class="name-box">
                <label class="name-label" for="name">名前</label>
                <input class="name-input" type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="email-box">
                <label class="email-label" for="email">メールアドレス</label>
                <input class="email-input" type="email" name="email" id="email" value="{{ old('email') }}"
                    required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="password-box">
                <label class="password-label" for="password">パスワード</label>
                <input class="password-input" type="password" name="password" id="password" required>
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button class="register-btn" type="submit">登録する</button>
        </form>
        <div class="login-rink__box">
            <a class="login-rink" href="{{ route('login') }}">ログインはこちら</a>
        </div>
    </div>
@endsection
