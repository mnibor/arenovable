@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="card-title">Acerca de Nosotros</h1>
            <hr>
            <div class="card mt-1">
                <img class="card-img-top img-fluid" src="{{ asset('images/favicon.png') }}" width="100px" height="100px" alt="Acción Renovable">
                <div class="card-body">
                    <p class="card-text">
                        <strong>Acción Renovable</strong> es un Blog de Noticias que busca publicar todas las novedades referidas a las Energías Renovables y todos aquellos temas que de alguna u otra forma tienen algún tipo de vinculación con las mismas. Con ese objetivo, nos encargamos de seleccionar con la mayor periodicidad posible, las mejores noticias de la región y el mundo para que nuestros lectores tengan en un sitio web, todas las respuestas que necesita sobre estas energías que representan el futuro de nuestro Planeta.
                        <br><br> Al mismo tiempo, se puede encontrar contenido formativo para aquellos que desarrollan su actividad en el rubro brindando de esta forma, una base de teoría y detalles prácticos referidos a las Energías Renovables.
                        <br><br> Bienvenidos a <strong>Acción Renovable</strong>
                        <br><br> Bienvenidos al apasionante mundo de las Energías Renovables...
                        <br><br> Para comunicarse con nosotros, pueden enviarnos un correo electrónico a info@accionrenovable.com 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
