<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <title>Programacion</title>
</head>
<body>
        <table class="table table-dark">
        <thead>


            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nivel</th>

                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ( $fotografo as $item)
            @if($item->estado == 'aceptado')
            <tr>

                <tr>
            <th>{{$item->nombre}}</th>
            <th>{{$item->apellidoP}}</th>
            <th>{{$item->apellidoM}}</th>
            <th>{{$item->nivel}}</th>
                <th>
                <a class ="btn btn-primary" href="subirFotografo/{{$item->id}}">Subir</a>
                <a class="btn btn-danger" href="bajarFotografo/{{$item->id}}">Bajar</a>
                </th>


            </tr>

            @endif
                            @endforeach
        </tbody>
    </table>

</body>
</html>
