@extends('layouts.backend.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Listado de Comentarios</h3>
            <br><br>
            <hr>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="70px">ACCIONES</th>
                        <th width="10px">ID</th>
                        <th>POST</th>
                        <th>FECHA</th>
                        <th>NOMBRE</th>
                        <th>EMAIL</th>
                        <th>COMENTARIO</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                    <tr>
                        <td width="70px">
                            {!! Form::open(['route' => ['replies.destroy', $comment->id], 'method' => 'DELETE']) !!}
                            <a href="{{ route('replies.show', $comment->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('replies.edit', $comment->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <span><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></span>
                            {!! Form::close() !!}
                        </td>
                        <td>{{ $comment->id }}</td>

                        <td class="text-left">{{ $comment->post_id }}</td>
                        <td class="text-left">{{ $comment->created_at }}</td>
                        <td class="text-left">{{ $comment->name }}</td>
                        <td class="text-left">{{ $comment->email }}</td>
                        <td class="text-left">{{ $comment->comment }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
