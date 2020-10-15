<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Formulario</title>
</head>
<body>
    <form action="{{url('mostrardatosTabla')}}" method="POST">
        @csrf
        <input type="text" id="nombre" name="nombre" placeholder="nombre">
        <input type="text" id="apellido" name="apellido" placeholder="apellido">
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>