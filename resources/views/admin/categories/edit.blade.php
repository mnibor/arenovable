@extends('layouts.backend.app')

@section('content')
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">Editar Categoría</h3>
				{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
				@include('admin.categories.partials.form')
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
