@extends('layouts.backend.app') @section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Ver Usuario</h3>

            <p>
                <strong>ID:</strong> {{ $user->id }}
            </p>
               
            <p>
                <strong>Nombre:</strong> {{ $user->name }}
            </p>

            <p>
                <strong>Slug:</strong> {{ $user->slug }}
            </p>
            
            <p>
                <strong>Correo Electrónico:</strong> {{ $user->email }}
            </p>

            <p>
                <strong>Tipo de Usuario:</strong> {{ $user->role }}
            </p>
            
            <a href="{{ route('users.index') }}" class="btn btn-success">Volver</a>


        </div>
    </div>
</div>

@endsection
