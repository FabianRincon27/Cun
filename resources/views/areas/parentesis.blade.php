<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Parentesis</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h5>Parentesis</h5>
                <label for="string">Porfavor ingrese la cadena de parentesis que desea analizar:</label>
                <input type="text" name="string" id="string" class="form-control">
                <br>
                <button class="btn btn-outline-success" id="analizar">Analizar</button>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <div class="col-md-5">
                <label id="salida"></label>
            </div>
        </div>
        <script>
            $('#analizar').click(function(){
                var cadena = document.getElementById('string').value;
                var s = document.getElementById('salida');
                var state = 0;
                var salida = '';
                for(var i = 0; i < cadena.length; i++){
                    if(state === 0 && cadena[i] === '('){
                        state = 1;
                    } else if(state === 1 && cadena[i] === ')'){
                        salida += '()';
                        state = 0;
                    }
                }
                $('#salida').append('Salida: ' + salida);
            });
        </script>
    </div>
</body>
</html>