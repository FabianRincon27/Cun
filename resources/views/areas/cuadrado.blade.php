<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Cuadrado</title>
</head>
<body>
    <br><br>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h5>Calcular el area de un circulo</h5>
                <label for="radio">Ingrese el valor para A:</label>
                <input type="number" name="uno" id="uno" required class="form-control">
                <br>
                <label for="radio">Ingrese el valor para B:</label>
                <input type="number" name="dos" id="dos" required class="form-control">
                <br>
                <button class="btn btn-outline-success" id="calculo">Calcular</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <label id="valor"></label>
            </div>
            <script>
                $('#calculo').click(function(e){
                    e.preventDefault();
                    var uno = document.getElementById("uno").value;
                    var dos = document.getElementById("dos").value;
                    var total = Math.pow(uno,2) + Math.pow(dos,2) + 2*(uno*dos);
                    $('#valor').append('Solucion: ' + parseInt(total));
                });
            </script>
        </div>
    </div>
</body>
</html>
