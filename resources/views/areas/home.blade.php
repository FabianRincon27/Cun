<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Areas</title>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="circulo-tab" data-bs-toggle="tab" data-bs-target="#circulo" type="button" role="tab" aria-controls="home" aria-selected="true">Circulo</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="triangulo-tab" data-bs-toggle="tab" data-bs-target="#triangulo" type="button" role="tab" aria-controls="profile" aria-selected="false">Triangulo</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cuadrado-tab" data-bs-toggle="tab" data-bs-target="#cuadrado" type="button" role="tab" aria-controls="contact" aria-selected="false">Cuadrado</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="circulo" role="tabpanel" aria-labelledby="circulo-tab">
                    <div class="container mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h5>Calcular el area de un circulo</h5>
                                <label for="radio">Ingrese el radio del circulo:</label>
                                <input type="number" name="radio" id="radio" required class="form-control">
                                <br>
                                <button class="btn btn-outline-success" id="calculo">Calcular</button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8 mt-4">
                                <label id="valor"></label>
                            </div>
                            <script>
                                $('#calculo').click(function(e){
                                    e.preventDefault();
                                    $r = document.getElementById("radio").value; 
                                    $radio = Math.PI * Math.pow($r,2);
                                    $('#valor').append('El area del circulo es de: ' + parseInt($radio));
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="triangulo" role="tabpanel" aria-labelledby="triangulo-tab">
                    <div class="container mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h5>Calcular el area de un triangulo</h5>
                                <label for="base">Ingrese la base del triangulo:</label>
                                <input type="number" name="base" id="base" required class="form-control">
                                <br>
                                <label for="altura">Ingrese la altura del triangulo:</label>
                                <input type="number" name="altura" id="altura" required class="form-control">
                                <br>
                                <button class="btn btn-outline-success" id="calculo-t">Calcular</button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8 mt-4">
                                <label id="valor-triangulo"></label>
                            </div>
                            <script>
                                $('#calculo-t').click(function(e){
                                    e.preventDefault();
                                    $b = document.getElementById("base").value; 
                                    $a = document.getElementById("altura").value; 
                                    $area = ($b*$a)/2;
                                    $('#valor-triangulo').append('El area del triangulo es de: ' + parseInt($area));
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cuadrado" role="tabpanel" aria-labelledby="cuadrado-tab">
                    <div class="container mt-3">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h5>Calcular el area de un cuadrado</h5>
                                <label for="base">Ingrese un lado del cuadrado:</label>
                                <input type="number" name="lado-u" id="lado-u" required class="form-control">
                                <br>
                                <label for="altura">Ingrese un lado del cuadrado:</label>
                                <input type="number" name="lado-d" id="lado-d" required class="form-control">
                                <br>
                                <button class="btn btn-outline-success" id="calculo-c">Calcular</button>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8 mt-4">
                                <label id="valor-c"></label>
                            </div>
                            <script>
                                $('#calculo-c').click(function(e){
                                    e.preventDefault();
                                    $b = document.getElementById("lado-u").value; 
                                    $a = document.getElementById("lado-d").value; 
                                    $area = $b*$a;
                                    $('#valor-c').append('El area del cuadrado es de: ' + parseInt($area));
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>