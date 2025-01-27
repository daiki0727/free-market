@extends('layouts.common')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/transaction-page.css') }}">
@endsection

@section('content')


@livewire('transaction')

@endsection
