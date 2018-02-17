@extends('layouts.app')

@section('content')

<div class="container">
	<h1> Bienvenido {{$usuario->name}}</h1>

	<h3>Registrar nuevo destino para viajar</h3>
	<form class="form-inline" action="/destino/create" method="post">
		<input type="text" name="pais" id="pais" class="form-control viaje" placeholder="País">
		<input type="text" name="estado" id="estado" class="form-control viaje" placeholder="Estado">
		<input type="text" name="ciudad" id="ciudad" class="form-control viaje" placeholder="Ciudad">
		<input type="text" name="noches" id="dias" class="form-control viaje" placeholder="Dias">
		<input type="text" name="noches" id="Noches" class="form-control viaje" placeholder="Noches">
		<button type="submit" class="btn btn-primary viaje">Agregar</button>
	</form>


	<table>
		<thead>
			<th scope="col">País</th>
			<th scope="col">Estado</th>	
			<th scope="col">Ciudad</th>	
			<th scope="col">Dias</th>	
			<th scope="col">Noches</th>	
		</thead>
		<tbody>
			@foreach($usuario->viajes as $viaje)
			<tr>
				<td>{{$viaje->pais}}</td>
				<td>{{$viaje->estado}}</td>
				<td>{{$viaje->ciudad}}</td>
				<td>{{$viaje->dias}}</td>
				<td>{{$viaje->noches}}</td>
			</tr>			
			@endforeach
		</tbody>
	</table>
</div>

@endsection