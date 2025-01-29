@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/payment-method.css') }}">
@endsection

@section('content')
    <div class="container">
        <h2>支払方法を選択してください</h2>
        <form action="#" method="POST">
            @csrf
            @foreach ($paymentMethods as $method)
                <div>
                    <input type="radio" id="payment_{{ $method->id }}" name="payment_method" value="{{ $method->id }}">
                    <label for="payment_{{ $method->id }}">{{ $method->payment_method }}</label>
                </div>
            @endforeach
            <button type="submit">決定</button>
        </form>
    </div>
@endsection
