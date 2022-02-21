@extends('layouts.app')

@section('content')

@if(!$posts->count())
<div class="alert alert-danger" role="alert">
    <strong>{{ __('No existen artículos para mostrar') }}</strong>
</div>
@else
@if(isset($categoryName))
<div class="alert alert-success" role="alert">
    Artículos con la Categoría: <strong>{{ $categoryName }}</strong>
</div>
@endif

@if(isset($tagName))
<div class="alert alert-success" role="alert">
    Artículos con la Etiqueta: <strong>{{ $tagName }}</strong>
</div>
@endif

@if(isset($authorName))
<div class="alert alert-success" role="alert">
    Artículos del Autor: <strong>{{ $authorName }}</strong>
</div>
@endif

<div class="row">
    <div class="col">
        <center>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-fb+5w+4e-db+86" data-ad-client="ca-pub-8114014643870499" data-ad-slot="2540041930"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});

            </script>
        </center>
    </div>
</div>

<br>
@foreach($posts as $post)

<div class="card border-primary">

    @if( $post->image)
    <a href="{{ route('post', $post->slug) }}">
        <img class="card-img-top img-fluid" src="{{ $post->pathAttachment() }}">
    </a>
    @endif

    <div class="card-header">
        <a href="{{ route('category', $post->category->slug) }}">
            <strong class="mb-2 text-info text-uppercase">{{ $post->category->name }}</strong>
        </a>

        <a href="{{ route('post', $post->slug) }}">
            <h2 class="text-dark">{{ $post->title }}</h2>
        </a>
        {{-- <a href="{{ route('author', $post->user->slug) }}">
            <h6 class="card-subtitle mb-2 mt-2 text-muted float-left"><i class="fas fa-user mr-2"></i> {{ $post->user->name }}</h6>
        </a> --}}
        <h6 class="card-subtitle mb-2 mt-2 text-muted float-right"><i class="fas fa-edit"></i> {{ $post->created_at->format('d-m-Y') }}</h6>
    </div>

    <div class="card-body">
        <blockquote> {{ $post->excerpt }}</blockquote>

        <a href="{{ route('post', $post->slug) }}" class="btn btn-primary btn-sm float right">{{ __('LEER MAS') }}</a>
        <span class="float-right text-muted"><i class="fas fa-eye"></i> {{ $post->view_count }}</span>
    </div>
</div>

<br>
@endforeach

<div class="clearfix d-flex justify-content-center">
    {{ $posts->render() }}
</div>

@endif
@endsection
