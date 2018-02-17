@extends('layouts.app')


@section('auth')
<form class="form-inline input-group-sm" method="POST" action="{{ route('login') }}">
    @csrf
    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} mr-2" name="email" value="{{ old('email') }}" placeholder="Correo" required>

    @if ($errors->has('email'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
        
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} mr-2" name="password" placeholder="Contraseña" required>

    @if ($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    <button type="submit" class="btn btn-primary btn-sm">
        Ingresar
    </button>
</form>

    <a class="btn btn-link d-inline-block olvContra" href="{{ route('password.request') }}">
       <u>¿Olvidaste tu contraseña?</u>
    </a>
<!---->
@endsection

@section('content')
        <div class="container-fluid row">
        	<div class="col d-flex justify-content-center">
        		<div class="card card-default bgAmarillo">
        			<div class="card-header">
        				¿Aún no te haz registrado?
        			</div>
	                <div class="card-body divRegistro">
	                    <form method="POST" action="{{ route('register') }}" class="marginForm">
	                        @csrf
	                        <div class="form-group input-group-sm row">
	                            <label for="name">Nombre</label>
                                <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }} " name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
	                        </div>

	                        <div class="form-group input-group-sm row">
	                            <label for="email">Correo</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="hola@correo.com" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
	                           
	                        </div>

	                        <div class="form-group input-group-sm row">
	                            <label for="username">Usuario</label>
	                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Usuario" required>

	                                @if ($errors->has('username'))
	                                    <span class="invalid-feedback">
	                                        <strong>{{ $errors->first('username') }}</strong>
	                                    </span>
	                                @endif
	                        </div>

	                        <div class="form-group input-group-sm row">
	                            <label for="password">Contraseña</label>
	                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="********" required>

	                                @if ($errors->has('password'))
	                                    <span class="invalid-feedback">
	                                        <strong>{{ $errors->first('password') }}</strong>
	                                    </span>
	                                @endif
	                        </div>

	                        <div class="form-group input-group-sm row">
	                            <label for="password-confirm">Confirmar contraseña</label>
	                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="********" required>
	                        </div>
                            <p class="terminos">Al registrarte aceptas los <a href="#">Términos y condiciones</a> y nuestro <a href="#">Aviso de privacidad</a>.</p>
	                        <div class="form-group row mb-0">
	                                <button type="submit" class="btn btn-primary">
	                                    Registrar
	                                </button>
	                        </div>
	                    </form>
	                </div>
	            </div>
        	</div>
        	<div class="col d-flex justify-content-center align-items-center ">
        		<div class="card card-default bgAmarillo">
        			<div class="card-header">
        				Ingresa con Facebook
        			</div>
	                <div class="card-body">
		        		<div class="row d-flex justify-content-center">
		    				<a href="/auth/facebook" class="btn btn-primary btnIngresar"><img class="rounded mr-2" src="../fb.png" alt="icon" height="30" width="30" />Ingresar</a>
						</div>
	                </div>
        		</div>
        	</div>
        </div>
@endsection
