<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Usuarios</title>
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h3 class="text-center">Lista de usuarios</h3>
                <br>
                <a href="{{ url('/register')}}" class="btn btn-success">Nuevo Usuario</a>
                <br><br>

                <form action="{{ url('/users')}}" method="GET">
                    <div class="row">
                        <div class="col-md-11">
                            <input type="text" class="form-control" name="search" value="{{$texto}}">
                        </div>
                        <div class="col-md-1">
                            <input type="submit" value="Buscar" class="btn btn-primary">
                        </div>
                    </div>
                </form>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td class="text-center">ID</td>
                            <td class="text-center">Name</td>
                            <td class="text-center">Email</td>
                            <td class="text-center">Position</td>
                            <td class="text-center">Salary</td>
                            <td class="text-center">Options</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @foreach ($user as $user)
                            <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">{{ $user->position }}</td>
                            <td class="text-center">{{ $user->salary }}</td>
                            <td>
                                <a href="{{ url('/users/'.$user->id.'/delete') }}" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>