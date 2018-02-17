@extends('layouts.app')

@section('content')


<form method="POST" action="/auth/facebook/register">
@csrf

	<div class="form-group row">
		<label for="name" class="col-md-4 col-form-label text-md-right"></label>
	    <div class="col-md-6">
	        <img class="img-thumbnail" src="{{ $user->avatar }}">
	    </div>
	</div>

	<div class="form-group row">
		<label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
		<div class="col-md-6">
	    	<input id="name" type="text" class="form-control" name="email" value="{{ $user->name }}" readonly>
		</div>
	</div>

	<div class="form-group row">
		<label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
		<div class="col-md-6">
	    	<input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
		</div>
	</div>

	<div class="form-group row">
	    <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

	    <div class="col-md-6">
	        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

	        @if ($errors->has('username'))
	            <span class="invalid-feedback">
	                <strong>{{ $errors->first('username') }}</strong>
	            </span>
	        @endif
	    </div>
    </div>
	
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            Registrar
        </button>
    </div>
</form>
@endsection