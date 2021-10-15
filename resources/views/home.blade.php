<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Prueba CUN</title>
        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .btn-outline-warning:hover, .btn-outline-info:hover{
                color: #fff !important;
            }
            .btn{
                diplay: block !important;
            }
        </style>
    </head>
    <body>
        <br><br>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-2">
                    <a href="{{ url('/areas') }}" class="btn btn-outline-primary btn-block">Punto 1</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('/parentesis') }}" class="btn btn-outline-secondary">Punto 2</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('/users') }}" class="btn btn-outline-success">Punto 3</a>
                </div>
                <div class="col-md-2">
                    <a href="{{ url('/cuadrado') }}" class="btn btn-outline-warning">Punto 4</a>
                </div>
            </div>
        </div>
    </body>
</html>
