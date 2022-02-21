@extends('layouts.backend.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Editar Comentario</h3>

            {!! Form::model($comment, ['route' => ['replies.update', $comment->id], 'method' => 'PUT']) !!}

            @include('admin.comments.partials.form')

            {!! Form::close() !!}


        </div>
    </div>
</div>

@endsection
