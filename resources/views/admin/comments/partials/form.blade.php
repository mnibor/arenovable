<div class="form-group">
    {{ Form::label ('post_id', 'ID del artículo:')}}
    {{ Form::text ('post_id', null, ['class' => 'form-control', 'id' => 'post_id']) }}
</div>
   

<div class="form-group">
    {{ Form::label ('name', 'Nombre del Autor:')}}
    {{ Form::text ('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
    {{ Form::label ('email', 'Correo Electrónico:')}}
    {{ Form::email ('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>

<div class="form-group">
    {{ Form::label ('comment', 'Comentario:')}}
    {{ Form::textarea ('comment', null, ['class' => 'form-control', 'rows' => '5', 'id' => 'comment']) }}
</div>

<div class="form-group">
    {{ Form::submit ('Guardar Comentario', ['class' => 'btn btn-success']) }}
</div>

@section('scripts')
<script src="{{ asset('backend/js/jquery.slugify.js') }}" charset="utf-8"></script>

<script type="text/javascript">

</script>
@endsection
