@extends('layouts.backend.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Listado de Categorías</h3>
            <span class=" float-right">
                <a class="btn btn-info btn-sm" href="{{ route('categories.create') }}">Nueva Categoría</a>
            </span>
            <br><br>
            <hr>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="10px">ID</th>
                        <th>CATEGORIA</th>
                        <th width="70px">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td class="text-left">{{ $category->name }}</td>
                        <td width="70px">
                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
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