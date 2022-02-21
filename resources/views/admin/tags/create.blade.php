@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Crear Nueva Etiqueta</h3>
            {!! Form::open(['route' => 'tags.store']) !!}
            @include('admin.tags.partials.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
