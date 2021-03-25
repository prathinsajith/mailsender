@extends('auth.layouts.app')

@section('title', 'Sign In')

@section('content')
                    <!--begin::Login Sign up form-->
                    <div class="mb-20">
                        <h3>Sign Up </h3>
                        <p class="opacity-60 font-weight-bold">Enter your details to Register your account:</p>
                    </div>
                    <form class="form text-center" method="POST" action="{{ route('register') }}" id="kt_login_signup_form">
                        @csrf
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8  @error('name') is-invalid @enderror"
                                type="text" placeholder="{{ __('Name') }}" name="name" id="username" value="{{ old('name') }}"
                                required autocomplete="name" autofocus />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror"
                                type="email" placeholder="{{ __('E-Mail Address') }}" name="email" id="email"
                                value="{{ old('email') }}" required autocomplete="email" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8  @error('password') is-invalid @enderror"
                                id="password" type="password" placeholder="{{ __('Password') }}" name="password"
                                required autocomplete="new-password" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror"
                                id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        <div class="form-group text-left px-8">
                            <div class="checkbox-inline">

                            </div>
                            <div class="form-text text-muted text-center"></div>
                        </div>
                        <div class="form-group">
                            <button id="kt_login_signup_submit"
                                class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Register</button>
                            <a href="{{ route('login') }}" id="kt_login_signup_cancel"
                                class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">Sign In</a>
                        </div>
                    </form>
                    <!--end::Login Sign up form-->
               @endsection
