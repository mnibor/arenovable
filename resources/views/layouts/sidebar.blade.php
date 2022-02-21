<div class="card">
    <div class="d-flex justify-content-center">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            {{-- RECTANGULO_MEDIANO --}}
            <ins class="adsbygoogle" style="display:inline-block;width:300px;height:250px" data-ad-client="ca-pub-8114014643870499" data-ad-slot="6139541446"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>

<br>

@foreach($postRandom as $random)
<a class="btn btn-block btn-lg btn-primary" href="{{ route('post', $random->slug) }}">Artículo al azar...</a>
@endforeach

<br>

<div class="card border-primary ">
    <div class="card-body">
        <h4 class="card-title text-uppercase">Posts Más leídos</h4>
        <p class="card-text">
            <ul class="tags">
                @foreach($popular as $popularPost)
                <a href="{{ route('post', $popularPost->slug) }}">
                    <h6 class="p-1">
                        <li class="text-dark">
                            {{ $popularPost->title }}
                            <span class="badge badge-primary float-right">{{ $popularPost->view_count }}</span>
                        </li>
                    </h6>
                </a>
                @endforeach
            </ul>
        </p>
    </div>
</div>

<br>
<div class="card">
    <div class="d-flex justify-content-center">
        <script type="text/javascript">
            google_ad_client = "ca-pub-8114014643870499";
            google_ad_slot = "8086553017";
            google_ad_width = 300;
            google_ad_height = 250;
        </script>
        {{-- Aviso Cuadrado --}}
        <script type="text/javascript"
        src="//pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
    </div>
</div>
<br>

<div class="card border-primary">
    <div class="card-body">
        <h4 class="card-title text-uppercase">Categorías</h4>
        <p class="card-text">
            <ul class="categories">
                @foreach($categories as $category)
                <a href="{{ route('category', $category->slug) }}">
                    <h6 class="p-1">
                        <li class="text-dark"><i class="fas fa-folder-open"></i> {{ $category->name }}
                            <span class="badge badge-primary float-right">{{ $category->posts->count() }}</span>
                        </li>
                    </h6>
                </a>
                @endforeach
            </ul>
        </p>
    </div>
</div>

<br>

<div class="card border-primary">
    <div class="card-body">
        <h4 class="card-title text-uppercase">Etiquetas</h4>
        <p class="card-text">
            <ul class="tags">
                @foreach($tags as $tag)
                    <span><a class="badge badge-pill badge-primary text-light text-uppercase" href="{{ route('tag', $tag->slug) }}">
                    {{ $tag->name }}</a></span>
                @endforeach
            </ul>
        </p>
    </div>
</div>

<br>

<div class="card">
    <div class="d-flex justify-content-center">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        {{-- AvisoVertical1--}}
        <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-8114014643870499" data-ad-slot="4166131176"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</div>
