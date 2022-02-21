@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Ver Comentario</h3>
            <p>
                <strong>Post ID:</strong> {{ $comment->post_id }}
            </p>

            <p>
                <strong>Nombre:</strong> {{ $comment->name }}
            </p>

            <p>
                <strong>Email:</strong> {{ $comment->email }}
            </p>

            <p>
                <strong>Comentario:</strong> {{ $comment->comment }}
            </p>
            
            <a href="{{ route('replies.index') }}" class="btn btn-success">Volver</a>
        </div>
    </div>
</div>

@endsection
