<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario insertar usuarios</title>
</head>
<body>
<form action="{{url('/Form')}}" method="POST">
    @csrf
    <input type="text" placeholder="nombre" name="nombre">
    <input type="text" placeholder="apellido" name="apellido">
    <button type="submit">Enviar<button>
</form>
</body>
</html>