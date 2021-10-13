<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registrar Usuario</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center">Registrar Usuario</h4>
                <form action="{{ url('/register') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre: </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Correo Electronico: </label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Telefono: </label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Dirección: </label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Posición: </label>
                        <input type="text" name="position" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Salario: </label>
                        <input type="text" name="salary" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="">Skills:</label>
                        <div class="form-check">
                            <input type="checkbox" name="html">
                            <label for="user_edit">HTML</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="css">
                            <label for="user_edit">CSS</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="javascript">
                            <label for="user_edit">JS</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="btn btn-outline-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>