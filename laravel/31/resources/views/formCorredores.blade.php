<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Corredores</title>
</head>
<body>
    <form action={{url('ProcesarForm')}} method="POST">
        @csrf
        <input type="text" placeholder="nombre" name="nombre">
        <input type="text" placeholder="apellidos" name="apellidos">
        <input type="text" placeholder="Procendencia del corredor" name="procedencia">
<<<<<<< HEAD
=======
        <input type="text" placeholder="imagen" name="imagen" value='1.jpg'>
>>>>>>> 26aea4356048c160352901dbef0f6fb86c48eec5
        <input type="text" placeholder="Tiempo en segundos" name="tiempoS" value="ABANDONA">
        <button type="submit">Enviar datos</button>
    </form>
</body>
</html>