<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Usuarios</title>
</head>
<body>
    <table style="1px solid black">
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->nombre}}{{$usuario->apellido}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>