<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="guardar-fotografia" method="post">
        {{csrf_field()}}
        <br>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Temática</label>
                    <input type="text" name="tematica" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="bmd-label-floating">Seleccione una cámara</label>
                    <select class="form-control" id="exampleSelect1" name="camara">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="bmd-label-floating">Precio</label>
                    <input type="text" name="precio" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" class="bmd-label-floating">Adjuntar archivo</label>
                    <input type="file" class="form-control-file" name="avatar">
                </div>
                <label for="">Nivel:</label>
            </div>
            <div class="col">
                <img src="" class="img-fluid" alt="Responsive image">
                <div class="form-group">
                    <label for="exampleTextarea" class="bmd-label-floating">Descripción</label>
                    <textarea class="form-control" name="descripcion" rows="3"></textarea>
                </div>
            </div>
        </div>
        <hr>
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    <button type="submit" class="btn btn-raised btn-primary">GUARDAR</button>
                    <a href="/fotografo"class="badge badge-danger">CANCELAR</a>
                </div>
            </div> 
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</html>