@extends('layouts.backend.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Editar Artículo</h3>
            <span class=" float-right">
                <a class="btn btn-info" href="{{ route('posts.create') }}">Nuevo Artículo</a>
            </span>
            <br><br>
            <hr>
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
                @include('admin.posts.partials.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection