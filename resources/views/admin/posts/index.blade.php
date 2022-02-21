@extends('layouts.backend.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Listado de Artículos</h3>
            <span class=" float-right">
                <a class="btn btn-info btn-sm" href="{{ route('posts.create') }}">Nuevo Artículo</a>
            </span>
            <br><br>
            <hr>

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="10px">ID</th>
                        <th>ARTICULOS</th>
                        <th>VISTAS</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td class="text-left">{{ $post->title }}</td>
                        <td class="text-left">{{ $post->view_count }}</td>

                        <td>
                            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <span><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></span>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection