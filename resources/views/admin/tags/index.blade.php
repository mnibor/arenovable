@extends('layouts.backend.app')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Listado de Etiquetas</h3>
            <span class=" float-right">
                <a class="btn btn-info btn-sm" href="{{ route('tags.create') }}">Nueva Etiqueta</a>
            </span>
            <br><br>
            <hr>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="10px">ID</th>
                        <th>ETIQUETA</th>
                        <th width="70px">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td class="text-left">{{ $tag->name }}</td>
                        <td width="70px">
                            {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                            <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
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