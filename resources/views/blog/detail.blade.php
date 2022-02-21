@extends('layouts.app')

@section('head')
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:type" content="Acción Renovable | Blog de Noticias" />
<meta property="og:title" content="{{ $post->title }}" />
<meta property="og:description" content="{{ $post->excerpt }}" />
<meta property="og:image" content="{{ asset('https://www.accionrenovable.com' . $post->pathAttachment()) }}" />
@endsection


@section('content')

<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2&appId=810531699280342&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>

@if(session('info'))
<div class="row">
    <div class="alert alert-success col-md-12">
        {{ session('info') }}
    </div>
</div>
@endif

@if(count($errors))
<div class="row">
    <div class="alert alert-danger col-md-12">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
    style="display:block; text-align:center;"
    data-ad-layout="in-article"
    data-ad-format="fluid"
    data-ad-client="ca-pub-8114014643870499"
    data-ad-slot="9777506262"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br>

<div class="card border-primary">
    <div class="card-body">
        @if( $post->image)
        <img class="card-img-top mb-2" src="{{ $post->pathAttachment() }}" class="img-fluid" />
        @endif
        <a href="{{ route('category', $post->category->slug) }}">
            <strong class="mb-2 text-info text-uppercase">{{ $post->category->name }}</strong>
        </a>
        <h2>{{ $post->title }}</h2>

        {{--<a href="{{ route('author', $post->user->slug) }}">
        <h6 class="card-subtitle mb-2 mt-2 text-muted float-left"><i class="fas fa-user mr-2"></i> {{ $post->user->name }}</h6>
        </a>--}}
        <h6 class="card-subtitle mb-2 mt-2 text-muted float-right">{{ $post->created_at->format('d/m/Y') }}</h6>
        <br><br>
        <h5>
            {{ $post->excerpt }}
        </h5>
        <hr>

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fb+5w+4e-db+86" data-ad-client="ca-pub-8114014643870499" data-ad-slot="2540041930"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});

        </script>

        {!! $post->body !!}
        <br><br>

        <i class="fas fa-tags mr-2 text-muted"></i>
        @foreach($post->tags as $tag)
        <span><a class="badge badge-pill badge-warning text-light text-uppercase" href="{{ route('tag', $tag->slug) }}"> {{ $tag->name }} </a></span>
        @endforeach
        <span class="float-right text-muted"><i class="fas fa-eye"></i> {{ $post->view_count }}</span>

        <ul class="social-links circle animated-effect-1">
            <h5>Compartir:</h5>
            <li class="facebook">
                <a href="http://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>

            <li class="twitter">
                <a href="https://twitter.com/share?text={{ $post->title }}&url={{ url()->full() }}" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>

            <li class="googleplus">
                <a href="https://plus.google.com/share?url={{ url()->full() }}" target="_blank">
                    <i class="fab fa-google-plus"></i>
                </a>
            </li>
            
            <li class="linkedin">
                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->full() }}&title={{ $post->title }}" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
            </li>

            <li class="xing"><a href="mailto:?Subject=Mira%20este%20link%20de%20FinderGreen&body=Hola,%20te%20env&iacute;o%20esta%20nota%20{{ asset('https://www.accionrenovable.com/blog/' . $post->slug) }}"><i class="far fa-envelope"></i></a></li>
        </ul>
    </div>
</div>
<br>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fb+5w+4e-db+86" data-ad-client="ca-pub-8114014643870499" data-ad-slot="2540041930"></ins>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({});

</script>

<br>

<div class="card border-success">
    <div class="card-body card-info">
        <h3 class="text-success"><strong>{{ __('Comentarios:') }}</strong></h3>
        <hr>
        <p class="text-right">{{ $comments->count() }} Comentarios</p>

        @foreach($comments as $comment)
        <div class="card">
            <div class="card-body">
                {{ $comment->comment }}
                <br>
                <span class="float-right text-muted"><i class="far fa-user"></i> {{ $comment->name }} </span>
            </div>
        </div>
        @endforeach

        <hr>

        {!! Form::open(['route' => 'comments']) !!}

        {{ Form::hidden('post_id', $post->id) }}

        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('name', 'Nombre (*):') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'onpaste' => 'return false']) }}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('email', 'Correo electrónico (*):') }}
                    {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'onpaste' => 'return false']) }}
                </div>
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('comment', 'Comentario:') }}
            {{ Form::textarea('comment', null, ['class' => 'form-control', 'id' => 'comment', 'rows' => '3', 'onKeyDown' => 'valida_longitud()', 'onkeyup' => 'valida_longitud()', 'onpaste' => 'return false']) }}
        </div>

        <span class="float-right">
            <strong><p>El correo electrónico no será publicado</p></strong>
        </span>

        <div class="form-group">
            {{ Form::submit ('Comentar', ['class' => 'btn btn-success']) }}
        </div>

        {!! Form::close(['route' => 'categories.store']) !!}
    </div>
</div>

<br>
<div class="form-row">
    <h3 class="text-success">Noticias que podrían Interesarte</h3>
    <br>
        @foreach($postSuggest as $random)
        <div class="card text-white col-md-12 bg-success mb-2">
            <div class="card-body">
            <h4 class="card-title">{{ $random->title }}</h4>
            <p class="card-text">{{ $random->excerpt }}</p>
            <a href="{{ route('post', $random->slug) }}" class="btn btn-light">Leer más</a>
            </div>
        </div>
        @endforeach

</div>

<br>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- rectangular pequeño -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8114014643870499"
     data-ad-slot="9955340671"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br>

<script>
contenido_textarea = ""
num_caracteres_permitidos = 140

function valida_longitud(){
    num_caracteres = document.forms[0].comment.value.length

    if (num_caracteres > num_caracteres_permitidos){
        document.forms[0].comment.value = contenido_textarea
    }else{
        contenido_textarea = document.forms[0].comment.value
    }

    if (num_caracteres >= num_caracteres_permitidos){
        document.forms[0].caracteres.style.color="#ff0000";
    }else{
        document.forms[0].caracteres.style.color="#000000";
    }

    cuenta()
}
function cuenta(){
    document.forms[0].caracteres.value=document.forms[0].comment.value.length
}
</script>

@endsection
