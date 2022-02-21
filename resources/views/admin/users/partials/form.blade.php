<div class="form-group">
  {{ Form::label ('name', 'Nombre del Usuario:')}}
  {{ Form::text ('name', null, ['class' => 'form-control', 'id' => 'name', 'data-slugify' => '#slug']) }}
</div>

<div class="form-group">
  {{ Form::label ('slug', 'Slug:')}}
  {{ Form::text ('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
  {{ Form::label ('email', 'Correo Electrónico:')}}
  {{ Form::email ('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>

<div class="form-group">
    {{ Form::label('role', 'Rol de Usuario:')}}
    <label>
        {{ Form::radio('role', 'USER') }} Usuario
    </label>
    <label>
        {{ Form::radio('role', 'ADMIN') }} Administrador
    </label>
</div>

<div class="form-group">
  {{ Form::submit ('Guardar Datos', ['class' => 'btn btn-success']) }}
</div>

@section('scripts')
  <script src="{{ asset('backend/js/jquery.slugify.js') }}" charset="utf-8"></script>

  <script type="text/javascript">

  </script>
@endsection
