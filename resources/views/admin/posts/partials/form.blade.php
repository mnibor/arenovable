@push('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('category_id', 'Categorías:') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('user_id', 'Usuario Autor:') }}
            {{ Form::select('user_id', $users, null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('title', 'Título:')}}
            {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'data-slugify' => '#slug']) }}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('slug', 'Slug:')}}
            {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
        </div>
    </div>
</div>

<div class="form-group">
    {{ Form::label('excerpt', 'Bajada:')}}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'id' => 'excerpt', 'rows' => '3']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Cuerpo:')}}
    {{ Form::textarea('body', null, ['class' => 'form-control ck-editor', 'id' => 'body']) }}
</div>

<div class="form-group">
    {{ Form::label('image', 'Imagen:')}}
    {{ Form::file('image') }}
</div>

<div class="form-group">
    {{ Form::label('status', 'Estado:')}}
    <label>
        {{ Form::radio('status', 'PUBLISHED') }} Publicado
    </label>
    <label>
        {{ Form::radio('status', 'DRAFT') }} Borrador
    </label>
</div>

<div class="form-group">
    {!! Form::label('tags[]', 'Etiquetas:') !!}
    {!! Form::select('tags[]',$tags,  null, ['class' => 'form-control', 'multiple', 'tags']) !!}
</div>

<div class="form-group">
    {{ Form::submit ('Publicar', ['class' => 'btn btn-success']) }}
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script src="{{ asset('js/jquery.slugify.js') }}" charset="utf-8"></script>

    <script src="https://cdn.ckeditor.com/4.11.1/standard-all/ckeditor.js"></script>

    <script>
        CKEDITOR.replace( 'body' );
    </script>

    <script>
        $( document ).ready(function(){
            $(".tags").select2();
        });
    </script>
@endpush
