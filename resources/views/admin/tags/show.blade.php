@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Ver Etiqueta</h3>

            <p>
              <strong>Nombre:</strong> {{ $tag->name }}
            </p>

            <p>
              <strong>Slug:</strong> {{ $tag->slug }}
            </p>

            <a href="{{ route('tags.index') }}" class="btn btn-success">Volver</a>

        </div>
    </div>
</div>

@endsection
