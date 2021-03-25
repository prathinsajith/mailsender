@extends('auth.layouts.app')

@section('title', 'Verify Your Email Address')

@section('content')
    <div class="login-signin">
        <div class="mb-20">
            <h3>{{ __('Verify Your Email Address') }}</h3>
            <p class="opacity-60 font-weight-bold">Enter your details to verify your account:</p>
        </div>
        @if (session('resent'))
            <div class="alert alert-custom alert-light-success fade show mb-5 " role="alert">
                <div class="alert-text">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            </div>
        @endif
        {{ __('Before proceeding, please check your email for a verification link.') }}
        {{ __('If you did not receive the email') }},
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit"
                class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">{{ __('click here to request another') }}</button>.
        </form>
    @endsection
