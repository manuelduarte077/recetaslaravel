@extends('layouts.app')

@section( 'botones' )

	<a href="{{ route('recetas.create') }}" class="btn btn-primary mr-2 text-white">
		<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-plus" fill="currentColor"
			 xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd"
				  d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
		</svg>
		Crear Receta
	</a>

@endsection

@section( 'content' )

	<h1 class="text-center mb-5">Administra tus recetas</h1>

	<div class="col-md-10 mx-auto bg-white p-3">
		<table class="table">
			<thead class="bg-primary text-light">
			<tr>
				<th scope="col">Titulo</th>
				<th scope="col">Categoria</th>
				<th scope="col">Acciones</th>
			</tr>
			</thead>

			<tbody>
			<tr>
				<td>Pizza</td>
				<td>Pizzas</td>
				<td>

				</td>
			</tr>
			</tbody>

		</table>
	</div>

@endsection


