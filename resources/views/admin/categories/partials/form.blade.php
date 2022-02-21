<div class="form-group">
    {{ Form::label ('name', 'Nombre de la Categoría:')}}
    {{ Form::text ('name', null, ['class' => 'form-control', 'id' => 'name', 'data-slugify' => '#slug']) }}
</div>

<div class="form-group">
    {{ Form::label ('slug', 'Slug:')}}
    {{ Form::text ('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
    {{ Form::submit ('Guardar Categoría', ['class' => 'btn btn-success']) }}
    <span class=" float-right">
        <a class="btn btn-info" href="{{ route('categories.create') }}">Nueva Categoría</a>
    </span>
</div>

@section('scripts')
<script src="{{ asset('backend/js/jquery.slugify.js') }}" charset="utf-8"></script>

<script type="text/javascript">

</script>
@endsection
