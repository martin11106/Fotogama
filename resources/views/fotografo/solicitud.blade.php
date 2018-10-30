<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitudes fotografos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="/admin"><i class="material-icons">arrow_back</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <span class="navbar-brand mb-0 h1">Solicitudes fotógrafos</span>
            </li>
        </ul>
    </div>
</nav>
  </nav><br><br>
  <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Correo electrónico</th>
                <th>Curriculum</th>
            </tr>
        </thead>
        <tbody>
        @if(count($fotografo) >= 0)
             
            @foreach ($fotografo as $item)
            <tr>
                <th> {{$item->nombre}} </th>
                <th> {{$item->apellidoPaterno}} {{$item->apellidoMaterno}}</th>
                <th> {{$item->email}}</th>
                <th> <a href="{{$item->rutaCurriculum}}">{{$item->rutaCurriculum}}</a></th>
                <th>
                    <a href="aceptarfotografo/{{$item->id}}" class="btn btn-primary">Aceptar</a>
                    <a href="eliminar-fotografo/{{$item->id}}" class="btn btn-danger"">Eliminar</a>
                </th>
            </tr>
            @endforeach
                
            
            @else
                <h1> No hay elementos </h1>
            @endif
        </tbody>
    </table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</html>