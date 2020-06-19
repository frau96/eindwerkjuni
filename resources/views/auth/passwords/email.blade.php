@extends('layouts.layout')

@section('content')
<section id="password" class="contact section-bgs">

    <div class="container">
        <div class="section-title">
            <h2>{{ __('Reset Password') }}</h2>
        </div>
        <div class="row justify-content-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" class="php-email-form">
            @csrf
                <div class="form-group row justify-content-center">
                    <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail') }}</label>

                    <div class="col-md-8">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div >
                        <button type="submit"  >
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>

@endsection
