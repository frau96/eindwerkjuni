@extends('layouts.layout')

@section('content')

<section id="register" class="contact">
    <div class="container ">
        <div class="section-title ">
            <h2>{{ __('Registeer') }}</h2>
            <p>Registreer je hier als psycholoog</p>
        </div>

        <div class="row justify-content-center">
            <form method="POST" action="{{ route('register') }}" class="col-lg-6 php-email-form " data-aos="fade-up">
                @csrf

                <div class="form-group row justify-content-center">
                    <label for="name" class="col-lg-10 col-form-label text-left">{{ __('Name') }}</label>

                    <div class="col-lg-10">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <label for="email" class="col-lg-10 col-form-label text-left ">{{ __('E-Mail Address') }}</label>

                    <div class="col-lg-10">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <label for="password" class="col-lg-10 col-form-label text-left">{{ __('Password') }}</label>

                    <div class="col-lg-10">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <label for="password-confirm" class="col-lg-10 col-form-label text-left">{{ __('Confirm Password') }}</label>

                    <div class="col-lg-10">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" >
                            {{ __('Registeer') }}
                        </button>
                    </div>
                </div>
            </form>

        </div>

    </div>

</section>


@endsection
