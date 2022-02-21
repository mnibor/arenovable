@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Ver Artículo</h3>

            <p>
                <strong>Título:</strong> {{ $post->title }}
            </p>

            <p>
                <strong>Slug:</strong> {{ $post->slug }}
            </p>

            <p>
                <strong>Bajada:</strong> {{ $post->excerpt }}
            </p>

            <p>
                <strong>Cuerpo:</strong> {{ $post->body }}
            </p>

            <a href="{{ route('posts.index') }}" class="btn btn-success">Volver</a>

        </div>
    </div>
</div>

@endsection