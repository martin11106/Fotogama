<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Solicitudes de Fotografo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light"style="background-color: #008276">
    <a class="navbar-brand" style="color: white" href="/">Foto<span>grama</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03" >
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Administrador</a>
        </li>
      </ul>
      <form class="form-inline">
      <!-- <a class="btn btn-primary" href="#" role="button" style="background-color: #00BFA5">Soy Editor</a>
      <a class="btn btn-primary" href="#" role="button" style="background-color: #00BFA5">Soy Fotografo</a> -->
      </form>
    </div>
  </nav><br><br>
  <table border="1px" class="table table-striped">
        <thead class="thead-dark">
            <tr style="text-align:center">
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @if(count($fotografo) >= 0)
             
            @foreach ($fotografo as $item)
            <tr>
                <th> {{$item->nombre}} </th>
                <th> {{$item->apellidoPaterno}} {{$item->apellidoMaterno}}</th>
                <th> {{$item->email}}</th>
                <th>
                    <a href="aceptarfotografo/{{$item->id}}">Aceptar Solicitud</a>
                </th>
            </tr>
            @endforeach
                
            
            @else
                <h1> No hay elementos </h1>
            @endif
        </tbody>
    </table>
</body>
</html>