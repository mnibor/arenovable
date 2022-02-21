@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
		<div class="card">
				<div class="card-body">
						<h3 class="card-title">Crear Nueva Categoría</h3>

            {!! Form::open(['route' => 'categories.store']) !!}

              @include('admin.categories.partials.form')

            {!! Form::close() !!}


				</div>
		</div>
</div>

@endsection
