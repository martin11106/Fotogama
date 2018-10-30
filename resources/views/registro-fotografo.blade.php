<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/editorial.css">
    <title>Regitrar fotografo</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/login"><i class="material-icons">arrow_back</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <span class="navbar-brand mb-0 h1">Registrar fotográfo</span>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <div class="create">
            <div>
                <form action="guardar-fotografo" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nombre" class="bmd-label-floating">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellidoP" class="bmd-label-floating">Apellido paterno</label>
                        <input type="text" name="apellidoP" class="form-control" id="apellidoP">
                    </div>
                    <div class="form-group">
                        <label for="apellidoM" class="bmd-label-floating">Apellido materno</label>
                        <input type="text" name="apellidoM" class="form-control" id="apellidoM">
                    </div>
                    <div class="form-group">
                        <label for="direccion" class="bmd-label-floating">Dirección</label>
                        <input type="text" name="direccion" class="form-control" id="direccion">
                    </div>
                    <div class="form-group">
                        <label for="telefono" class="bmd-label-floating">Teléfono</label>
                        <input type="tel" name="telefono" class="form-control" id="telefono">
                    </div>
                    <div class="form-group">
                        <label for="correo" class="bmd-label-floating">E-mail</label>
                        <input type="email" name="correo" class="form-control" id="correo">
                    </div>
                    <div class="form-group">
                        <label for="passoord" class="bmd-label-floating">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password2" class="bmd-label-floating">Vuelva a escribir la contraseña</label>
                        <input type="password" name="password2" class="form-control" id="passowrd2">
                    </div>
                    <div class="form-group">
                        <label for="rutaCurriculum" class="bmd-label-floating">Ruta de curriculum</label>
                        <input type="text" name="rutaCurriculum" class="form-control" id="rutaCurriculum">
                    </div>
                    <button type="submit" class="btn btn-raised btn-primary">Registrar</button>
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