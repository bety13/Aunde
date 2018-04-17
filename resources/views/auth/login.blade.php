
@extends('layouts.login')

@section('content')
<!--<div class="container" style="margin-top: 100px;background-color: red; width: 800px;">-->
    <div class="row justify-content-center" >
        <div class="col-md-8" style="background-color: ; width: 100%">
            <div class="card" style="background-color: ; width: 100%; background-color: rgb(0, 13, 26, 0.5)">
                <div class="card-header" style="color: white">Introduce tus datos.</div>

                <div class="card-body">

                @if ($status = Session::get('status'))
                    <div class="alert alert-info">
                        {{$status}}
                    </div>

                @endif


                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row" style="color: white; border-color: black">
                            <label for="username" class="col-sm-4 col-form-label text-md-right">Usuario</label>

                            <div class="col-md-6">
                                <input style="background-color: white" id="username" type="" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row" style="color: white">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-size: 14.5px;">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label style="color: white">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--</div>-->
@endsection
