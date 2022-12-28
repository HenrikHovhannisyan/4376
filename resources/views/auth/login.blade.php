@extends('layouts.app1')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row border login_container">
            <div class="col-12 col-md-6 ps-0 d-none d-md-block">
                <img src="{{ asset('img/login-cover.png') }}" class="img-fluid" alt="Discover Our Business Expertise">
            </div>
            <div class="col-12 col-md-6 pb-5">
                <h1 class="login_title">Login</h1>
                <p class="login_text">See your growth and get consulting support!</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <div class="col">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                   placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" name="password" required
                                   autocomplete="current-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 d-flex align-items-center">
                        <div class="col-6 login_remember">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-6 login_password_request">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn_login">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="col-12 login_create_account">
                            <span>
                                Not registered yet?
                                <a href="{{ route('register') }}" class="fw-bold text-dark text-decoration-underline">{{ __('Create an Account') }}</a>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
