@extends('layouts.app1')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="register_form border shadow mt-5 mb-5">
                    <h1 class="register_title">{{ __('Register') }}</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-1">
                            <div class="col-12 col-md-6 mb-1">
                                <input name="organization-name" value="{{ old('organization-name') }}" type="text"
                                       class="rounded-0 form-control"
                                       autofocus
                                       placeholder="Organization Name">
                            </div>
                            <div class="col-12 col-md-6 mb-1">
                                <input name="address" value="{{ old('address') }}" type="text"
                                       class="rounded-0 form-control"
                                       placeholder="Address including country">
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-12 col-md-6 mb-1">
                                <input id="name" type="text"
                                       class="rounded-0 form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}" required autocomplete="name"
                                       placeholder="Username">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 mb-1">
                                <input id="password" type="password"
                                       class="rounded-0 form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-12 col-md-6 mb-1">
                                <input name="first_name" value="{{ old('first_name') }}" type="text"
                                       class="rounded-0 form-control"
                                       placeholder="First Name">
                            </div>
                            <div class="col-12 col-md-6 mb-1">
                                <input name="last_name" value="{{ old('last_name') }}" type="text"
                                       class="rounded-0 form-control"
                                       placeholder="Last Name">
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-12 col-md-6 mb-1">
                                <input id="email" type="email"
                                       class="rounded-0 form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email"
                                       placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-md-6 mb-1">
                                <input id="phone" type="text"
                                       class="rounded-0 form-control @error('mobile_number') is-invalid @enderror"
                                       name="mobile_number" value="{{ old('mobile_number') }}" required autocomplete="phone" autofocus
                                       placeholder="Mobail Phone Number">

                                @error('mobile_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12 col-md-4 mb-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pricing" id="inlineRadio1"
                                           value="yearly" required>
                                    <label class="form-check-label" for="inlineRadio1">Yearly Plan</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pricing" id="inlineRadio2"
                                           value="monthly" required>
                                    <label class="form-check-label" for="inlineRadio2">Monthly Plan</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mb-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pricing" id="inlineRadio3"
                                           value="free" required checked>
                                    <label class="form-check-label" for="inlineRadio3">14 Days Free Trial</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn_register w-100">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
