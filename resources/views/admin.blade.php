<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin.css">
    <title>Administrador</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/"><i class="material-icons">home</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <span class="navbar-brand mb-0 h1">Administrador</span>
                </li>
            </ul>
        </div>
    </nav>
    <div class="contendorMadre">
            <div class="contenedor">
            <div class="cardLeft">
            <a href="/solicitudes"><i class="material-icons">assignment</i>
                <h4>Solicitudes fotográfos</h4> </a>
            </div>
            <div class="cardCenter">
            <a href=""><i class="material-icons">assignment</i> 
                <h4>Solicitudes suscripciones</h4></a> 
            </div>
            <div class="cardRight"> 
            <a href="/verLista"><i class="material-icons">camera_enhance</i>
                <h4>Fotógrafos</h4> </a>
            </div>
        </div>
        <div class="contenedor">
            <div class="cardLeft"> 
            <a href=""><i class="material-icons">collections</i>
                <h4>Imágenes</h4> </a>
            </div>
            <div class="cardCenter"> 
            <a href=""><i class="material-icons">account_balance_wallet</i>
                <h4>Pagos</h4> </a>
            </div>
            <div class="cardRight">
            <a href=""><i class="material-icons">monetization_on</i> 
                <h4>Venta</h4> </a>
            </div>
            <div class="cardRight"> 
                <a href=""><i class="material-icons">subscriptions</i>
                    <h4>Sucripciones</h4> </a>
                </div>  
        </div>
        <div class="contenedor">
                
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
</body>
</html>