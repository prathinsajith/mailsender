@extends('auth.layouts.app')

@section('title', 'Home')

@section('content')
<div class="form-group">
    <div class="mb-20">
        <h2>Mail Sender </h2>
        <h5 class="opacity-70 font-weight-bold">Always be ahead</h5>
    </div>
    <a href="{{ route('register') }}" class="btn btn-pill btn-outline-white font-weight-bold opacity-95 px-15 py-3 m-2">Sign
        Up</a>
    <a href="{{ route('login') }}" class="btn btn-pill btn-outline-white font-weight-bold opacity-95 px-15 py-3 m-2">Sign In</a>
</div>
@endsection
