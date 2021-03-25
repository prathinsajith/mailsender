@extends('auth.layouts.app')

@section('title', 'Sign In')

@section('content')
<div class="login-signin">
    <div class="mb-20">
        <h3> {{ __('Reset Password') }} </h3>
        <p class="opacity-60 font-weight-bold">Enter your new password to reset your account password:</p>
    </div>
                    <form method="POST"  class="form" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                                <input id="email" type="email" class="form-control  h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                                <input id="password" type="password" class="form-control  h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" name="password" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control  h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
                        </div>
                        <div class="form-group text-center mt-10">
                                <button type="submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3">
                                    {{ __('Reset Password') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
