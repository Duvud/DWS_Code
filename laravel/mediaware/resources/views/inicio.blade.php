<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina inicio</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="{{url('/entrada')}}" method="POST">
        @csrf
        <input type="text" name="edad" placeholder="Introduce tu edad">
        <button type="submit">Entrar</button>
    </form>
</body>
</html>