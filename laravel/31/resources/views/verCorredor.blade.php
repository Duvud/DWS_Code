<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Corredor</title>
</head>
<body>
    <h1>Datos del corredor </h1>
    <h3>Nombre:</h3>
    {{$nombre}}
    <h3>Apellidos:</h3>
    {{$apellidos}}
    <h3>imagen</h3>
    <img src='{{URL::asset($imagen = 'imagenes/' . $imagen)}}' alt="imagen corredor">
</body>
</html>