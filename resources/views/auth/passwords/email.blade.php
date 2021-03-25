@extends('auth.layouts.app')

@section('title', 'Sign In')

@section('content')
    <div class="login-signin">
        <div class="mb-20">
            <h3> Forgot Password </h3>
            <p class="opacity-60 font-weight-bold">Enter your email to reset your account:</p>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" class="form" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 @error('email') is-invalid @enderror"
                    type="text" placeholder="{{ __('E-Mail Address') }}" type="email" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus autocomplete="off" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group text-center mt-10">
                <button type="submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>

@endsection
