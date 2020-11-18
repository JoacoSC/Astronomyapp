@extends('layouts/master')

@section('contenido')

{{-- LOGIN MIO --}}

<div class="text" style="margin-bottom: 25px;padding: 0px;">
    <h2 style="text-align: center;">Iniciar Sesión</h2>
    <div class="container" style="min-width: 45%">
        <div class="row" style="padding-top: 20px;border-radius: 20px;background: rgba(0,163,255,0.18);box-shadow: 2px 2px 10px rgba(0,0,0,0.7);border: 1px solid #5c5c5c ;">
            <div class="col" style="height: 50px;"></div>
            <div class="col-sm-12 col-md-12 col-lg-12 offset-sm-1 offset-md-2 offset-lg-2" style="margin-bottom: 0px;background: rgba(0,0,0,0.69);border-radius: 20px;border-width: 1px;border-style: solid;text-shadow: 1px 1px 2px rgb(0,0,0);box-shadow: 0px 2px 11px 1px rgb(0,0,0);margin-left: 0;padding-top: 0px;">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group" style="padding-bottom: 25px;">
                        <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                            Email
                        </h5>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                            Contraseña
                        </h5>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <button  class="btn btn-primary" type="submit" style="font-size: 20px;background: rgb(0,163,255);border-style: none;border-color: rgb(0,163,255);margin-top: 40px;">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-12" style="padding-bottom: 0px;margin-bottom: 0px;margin-top: 0px;"></div>
        </div>
    </div>
</div>

{{-- LOGIN MIO
*
*
*
*
* --}}


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
