@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
    <div class="login-container">
        <h1 class="login-title">ログイン</h1>
        <form class="login-form" action="{{ route('login') }}" method="POST">
            @csrf

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

            <button class="login-btn" type="submit">ログインする</button>
        </form>
        <div class="register-rink__box">
            <a class="register-rink" href="{{ route('register') }}">会員登録はこちら</a>
        </div>
    </div>
@endsection
