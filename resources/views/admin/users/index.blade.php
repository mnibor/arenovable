@extends('layouts.backend.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Listado de Usuarios</h3>
            <span class=" float-right">
                <a class="btn btn-info btn-sm" href="{{ route('users.create') }}">Nuevo Usuario</a>
            </span>
            <br><br>
            <hr>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="10px">ID</th>
                        <th>USUARIO</th>
                        <th width="70px">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td class="text-left">{{ $user->name }}</td>
                        <td width="70px">
                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
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