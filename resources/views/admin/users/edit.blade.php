@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
		<div class="card">
				<div class="card-body">
						<h3 class="card-title">Editar Usuario</h3>

            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

              @include('admin.users.partials.form')

            {!! Form::close() !!}


				</div>
		</div>
</div>

@endsection
