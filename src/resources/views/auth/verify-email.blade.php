@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/verify-email.css') }}">
@endsection

@section('content')

    <div class="verify-container">
        <h2 class="verify-heading">本人確認メールを送信しました！</h2>
        <div class="verify-inner">
            <span class="verify-message">確認用メールを送信しました。</span>
            <span class="verify-message">メールをご確認いただき、メールに記載されたボタンをクリックして登録を完了してください。</span>
            <span class="verify-message__resend">メールが届かない方は以下のボタンを再度クリックしてください。</span>
            <form class="verify-form" action="{{ route('verification-send') }}" method="post">
                @csrf
                <button class="resend-btn">メール再送信</button>
            </form>
            <div class="register-area">
                <a class="register-btn" href="{{ route('register') }}">会員登録画面へ戻る</a>
            </div>
        </div>
    </div>

@endsection