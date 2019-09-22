@extends('layouts.templateAuth')

@section('content')
<div class="container">

    <div class="page-header">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">

            </div>

        </div>
    </div>
    <div class="page-content pt-0">

        <!-- Main content -->
        <div class="content-wrapper">
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Login form -->
                <form class="login-form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="card mb-0">
                        <div class="card-body">
                                <div class="text-center mb-3">
                                    <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                                    <h5 class="mb-0">Inicia Sesión en tu cuenta</h5>
                                    <span class="d-block text-muted">Tus credenciales</span>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-group-feedback form-group-feedback-left">
                                    <input id="email" type="email" class="form-control" placeholder="Username" name="email" value="{{ old('email') }}" required autofocus>
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                     @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-group-feedback form-group-feedback-left">
                                    <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group d-flex align-items-center">
                                    <div class="form-check mb-0">
                                        <label class="form-check-label" >
                                            <div class="uniform-checker"><span class="checked"><input type="checkbox" name="remember" class="form-input-styled" checked="" data-fouc=""></span></div>
                                            Recordar contraseña
                                        </label>
                                    </div>

                                    <a href="{{ route('password.request') }}" class="ml-auto">Olvidaste tu contraseña?</a>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-block legitRipple">Iniciar Sesión<i class="icon-circle-right2 ml-2"></i></button>
                                </div>
                        </div>
                    </div>
                </form>
                <!-- /login form -->

            </div>
        </div>
        <!-- /main content -->

    </div>
</div>
@endsection
