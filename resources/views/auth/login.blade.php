@extends('layouts.layout')

@section('content')

<section id="login" class="contact">
    <div>
        <br>
    </div>
<div class="container">

    <div class="section-title">
        <h2>Login</h2>
        <p>Login om nieuwe beschikbaarheden toe tevoegen, aan te passen en afspraken te bekijken. </p>
    </div>

    <div class="row justify-content-center">
        <form method="POST" action="{{ route('login') }}" class="col-lg-6 php-email-form " data-aos="fade-up">
            @csrf

            <div class="form-group">
                <label for="email" class="col-form-label">{{ __('E-mail') }}</label>

                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group ">
                <label for="password" class="col-form-label ">{{ __('Password') }}</label>

                <div >
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row justify-content-center">
                <div  class="col text-center">

                    
                    
                       
                        <button type="submit" >
                            {{ __('Login') }}
                        </button>
                    
                        
                    @if (Route::has('password.request'))
                    <button type="submit" ><a  href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a> </button>
                    @endif
                
                </div>
            </div>
        </form>

    </div>


</div>
</section>