@extends('layouts.common')

@section('content')
<div class="register-container">
    <h1>会員登録</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">名前:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">メールアドレス:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">パスワード:</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">登録</button>
    </form>
</div>
@endsection
