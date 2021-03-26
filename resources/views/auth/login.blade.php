@extends('auth.layouts.app')

@section('title', 'Sign In')

@section('content')
    <!--begin::Login Sign in form-->
    <div class="mb-20">
        <h3>Sign In </h3>
        <p class="opacity-60 font-weight-bold">Enter your details to login to your account:</p>
    </div>
    <form method="POST" action="{{ route('login') }}" class="form" id="kt_login_signin_form">
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
        <div class="form-group">
            <input
                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5 @error('password') is-invalid @enderror"
                type="password" placeholder="{{ __('Password') }}" name="password" required
                autocomplete="current-password" />
        </div>
        <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 ">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                    <span></span> {{ __('Remember Me') }}
                </label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" id="kt_login_forgot"
                    class="text-white font-weight-bold">{{ __('Forgot Your Password?') }}</a>
            @endif
        </div>
        <div class="form-group text-center mt-10">
            <button id="kt_login_signin_submit"
                class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">Sign
                In</button>
        </div>
    </form>
    <div class="mt-10">
        <span class="opacity-70 mr-4">Don't have an account yet?</span>
        <a href="{{ route('register') }}" class="text-white font-weight-bold">Sign Up</a>
    </div>
    <!--end::Login Sign in form-->
@endsection
