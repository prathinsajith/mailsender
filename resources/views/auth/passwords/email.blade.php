@extends('auth.layouts.app')

@section('title', 'Sign In')

@section('content')

    <!--begin::Login forgot password form-->
    <div class="mb-20">
        <h3>{{ __('Forgotten Password ?') }}</h3>
        <p class="opacity-60">{{ __('Enter your email to reset your password') }}</p>
    </div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" class="form" action="{{ route('password.email') }}" id="kt_login_forgot_form">
        @csrf
        <div class="form-group mb-10">
            <input
                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror"
                type="text" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required
                autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus />

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit"
                class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Request</button>
            <a href="{{ route('login') }}"
                class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Cancel</a>
        </div>
    </form>
@endsection
