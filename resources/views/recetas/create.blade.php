@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css"
		  integrity="sha512-EQF8N0EBjfC+2N2mlaH4tNWoUXqun/APQIuFmT1B+ThTttH9V1bA0Ors2/UyeQ55/7MK5ZaVviDabKbjcsnzYg=="
		  crossorigin="anonymous"/>
@endsection

@section( 'botones' )

	<a href=" {{ route('recetas.index') }} " class="btn btn-primary mr-2 text-white">
		<svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor"
			 xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd"
				  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
		</svg>
		Volver
	</a>

@endsection

@section( 'content' )
	<h1 class="text-center mb-5">Crea Nueva recetas</h1>

	<div class="row justify-content-center mt-5">
		<div class="col-md-8">
			<form action="{{ route('recetas.store') }}" method="POST" enctype="multipart/form-data" novalidate>
				@csrf
				<div class="form-group">
					<label for="titulo">Titulo Recetas</label>

					<input type="text"
						   name="titulo"
						   class="form-control @error('titulo') is-invalid @enderror"
						   id="titulo"
						   placeholder="Titulo de la Receta"
						   value="{{ old('titulo') }}"
					/>

					@error ('titulo')
					<span class="invalid-feedback d-block" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror

				</div>

				<div class="form-group">
					<label for="categoria">Categoria</label>

					<select name="categoria"
							id="categoria"
							class="form-control @error('categoria') is-invalid @enderror">
						<option value="">--> Seleccione <--</option>
						@foreach($categorias as $id => $categoria)
							<option
								value="{{ $id }}" {{ old('categoria') == $id ? 'selected' : '' }}> {{ $categoria }}</option>
						@endforeach
					</select>

					@error ('categoria')
					<span class="invalid-feedback d-block" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror

				</div>

				<div class="form-group mt-3">
					<label for="preparacion">Preparacion</label>
					<input id="preparacion" type="hidden" name="preparacion" value="{{ old('preparacion') }}">
					<trix-editor class="@error('preparacion') is-invalid @enderror" input="preparacion"></trix-editor>

					@error ('preparacion')
					<span class="invalid-feedback d-block" role="alert">
								<strong>{{ $message }}</strong>
						</span>
					@enderror

				</div>

				<div class="form-group mt-3">
					<label for="ingredientes">Ingredientes</label>
					<input id="ingredientes" type="hidden" name="ingredientes" value="{{ old('ingredientes') }}">
					<trix-editor class="@error('ingredientes') is-invalid @enderror" input="ingredientes"></trix-editor>

					@error ('ingredientes')
					<span class="invalid-feedback d-block" role="alert">
								<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="imagen">Elige una imagen</label>

					<input type="file"
						   id="imagen"
						   class="form-control @error('imagen') is-invalid @enderror"
						   name="imagen">

					@error ('imagen')
						<span class="invalid-feedback d-block" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="form-group">

					<input type="submit" class="btn btn-primary" value="Agregar Receta">

				</div>

			</form>
		</div>
	</div>

@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js"
			integrity="sha512-S9EzTi2CZYAFbOUZVkVVqzeVpq+wG+JBFzG0YlfWAR7O8d+3nC+TTJr1KD3h4uh9aLbfKIJzIyTWZp5N/61k1g=="
			crossorigin="anonymous"></script>
@endsection

