@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Ver Categoría</h3>

            <p>
              <strong>Nombre:</strong> {{ $category->name }}
            </p>

            <p>
              <strong>Slug:</strong> {{ $category->slug }}
            </p>

            <a href="{{ route('categories.index') }}" class="btn btn-success">Volver</a>

        </div>
    </div>
</div>

@endsection
