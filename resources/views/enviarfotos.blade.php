<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/editorial.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <title>Envio Fotos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/reportegeneral/{{$fotografo}}"><i class="material-icons">arrow_back</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <span class="navbar-brand mb-0 h1">Envio Fotos</span>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <div class="create">
            <div>
                <form action="/guardarfoto/{{$id}}/{{$fotografo}}" method="post">
                    
                    <center>
                        <legend>Envio Fotos</legend>
                        <i class="fas fa-images" style="font-size:6em"></i>
                    </center>
                    {{csrf_field()}}
                    <div class="form-group">
                            <label for="ide" class="bmd-label-floating">Id-reporte</label>
                        <input type="text" name="ide" class="form-control" id="ide" disabled="disabled" value="{{$reporte->id}}">
                    </div>
                    <div class="form-group">
                        <label for="ruta" class="bmd-label-floating">Fotografia</label>
                        <input type="file" name="ruta" class="form-control" id="ruta">
                    </div>
                    <div class="form-group">
                        <label for="descripcion" class="bmd-label-floating">Descripcion</label>
                        <input type="text" name="descripcion" class="form-control" id="descripcion" value="{{$reporte->descripcion}}" >
                    </div>
                    <button type="submit" class="btn btn-raised btn-primary">ENVIAR FOTO</button>                    
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</html>