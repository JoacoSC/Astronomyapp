@extends('layouts/master')

@section('contenido')

<div class="text" style="margin-bottom: 25px;padding: 0px;">
    <h2 style="text-align: center;">Actualizar perfil</h2>
    <div class="container">
        <div class="row" style="padding-top: 20px;border-radius: 20px;background: rgba(0,163,255,0.18);box-shadow: 2px 2px 10px rgba(0,0,0,0.7);border: 1px solid #5c5c5c ;">
            <div class="col" style="height: 50px;"></div>
            <div class="col-sm-12 col-md-12 col-lg-12 offset-sm-1 offset-md-2 offset-lg-2" style="margin-bottom: 0px;background: rgba(0,0,0,0.69);border-radius: 20px;border-width: 1px;border-style: solid;text-shadow: 1px 1px 2px rgb(0,0,0);box-shadow: 0px 2px 11px 1px rgb(0,0,0);margin-left: 0;padding-top: 0px;padding-bottom: 10px;">
                <form method="POST" action="{{ route('actualizarPerfil') }}">
                    @csrf

                    <div class="form-group">
                        <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                            Email
                        </h5>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user['email'] }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    <div class="form-group">
                        <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                            Nombre
                        </h5>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user['name'] }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    {{-- <div class="form-group">
                        <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                            Contraseña
                        </h5>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    <div class="form-group">
                        <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                            Confirmar Contraseña
                        </h5>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div> --}}
                    {{-- <div class="form-group">
                        <h5 class="d-flex d-lg-flex justify-content-center align-items-center justify-content-lg-center align-items-lg-end" style="height: 140px;border-radius: 10px;text-align: center;font-size: 24px;">
                            Institución
                        </h5>
                            <select class="form-control">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">
                                        This is item 1
                                    </option>
                                    <option value="13">
                                        This is item 2
                                    </option>
                                    <option value="14">
                                        This is item 3
                                    </option>
                                </optgroup>
                            </select>
                        <small class="form-text text-muted" style="margin-top: 20px;margin-bottom: 10px;font-size: 14px;">
                            ¿Su institución no aparece en la lista?
                        </small>
                        <button class="btn btn-primary" type="button" style="margin-top: 0px;background: rgb(0,163,255);border-color: rgb(0,163,255);margin-bottom: 10px;font-size: 14px;">
                            Agregar Institución
                        </button>
                    </div> --}}
                    <button class="btn btn-primary" type="submit" style="font-size: 20px;background: rgb(0,163,255);border-color: rgb(0,163,255);margin-top: 10px;margin-bottom: 10px;">
                        Actualizar
                    </button>
                </form>
            </div>
            <div class="col-lg-12" style="padding-bottom: 0px;margin-bottom: 20px;margin-top: 20px;"></div>
        </div>
    </div>
</div>

@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

