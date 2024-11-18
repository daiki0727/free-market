@extends('layouts.common')

@section('content')
<div class="login-container">
    <h1>ログイン</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">メールアドレス:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">ログイン</button>
    </form>
</div>
@endsection
