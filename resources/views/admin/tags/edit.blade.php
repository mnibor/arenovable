@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Editar Etiqueta</h3>
            {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
            @include('admin.tags.partials.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
