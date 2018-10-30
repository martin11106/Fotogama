<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REPORTES</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/fotografo"><i class="material-icons">arrow_back</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <span class="navbar-brand mb-0 h1">Reportes</span>
                </li>
            </ul>
        </div>
    </nav>
<br><br>
    <table class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>                
                {{-- nombre completo --}}
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Categoria</th>       
                <th scope="col">Editorial</th>            
                <th scope="col">Acciones</th>  
            </tr>
        </thead>
    
    
        <tbody>
            @if(count($reportes)>=1)
            
                @foreach ($reportes as $item)                
                    <tr>
                    <td scope="col">{{$item->id}}</td>              
                    <td scope="col">{{$item->titulo}}</td>
                    <td scope="col">{{$item->descripcion}}</td>
                    <td scope="col">{{$item->categoria}}</td>
                    <td scope="col">{{$item->editorial_id}}</td>

                    <td>
                        <a class="btn btn-primary" href="/enviarfotos/{{$item->id}}/{{$id}}">Enviar fotografias</a>                        
                    </td>
                    </tr>
                @endforeach                                    

                
            @else
                <h1>No hay elementos</h1>
            @endif
                        
        </tbody>
    </table>    
</body>
</html>