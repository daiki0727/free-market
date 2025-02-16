@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/payment-method.css') }}">
@endsection

@section('content')
    <div class="payment-method__container">
        <h2 class="payment-method__heading">支払方法を選択してください</h2>
        <form class="payment-method__form" action="{{ route('payment-process') }}" method="POST">
            @csrf

            @foreach ($paymentMethods as $method)
                <div>
                    <input class="payment-method__input" type="radio" id="payment_{{ $method->id }}"
                        name="payment_method" value="{{ $method->id }}" @if (isset($transaction) && $transaction->payment_method_id == $method->id) checked @endif
                        required>
                    <label class="payment-method__label" for="payment_{{ $method->id }}">
                        {{ $method->payment_method }}
                    </label>
                </div>
            @endforeach

            <button class="confirm__btn" type="submit">決定</button>
        </form>
    </div>
@endsection
