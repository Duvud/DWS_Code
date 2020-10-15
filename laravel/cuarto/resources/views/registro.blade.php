<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <form action="{{url('/mostrardatos')}}" method="POST">
        @csrf
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>