<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/procesarForm')}}" method="POST">
        @csrf
        <input type="text" placeholder="Nombre" name="nombre">
        <input type="text" placeholder="Apellido" name="apellido">
        <input type="text" placeholder="DNI" name="dni">
        <input type="text" placeholder="Fecha de nacimiento" name="fecha_nacimiento">
        <input type="text" placeholder="Sexo" name="sexo">
        <input type="text" placeholder="Direccion" name="direccion">
        <input type="text" placeholder="Discapacidad" name="discapacidad">
        <input type="text" placeholder="ID" name="id">
        <input type="text" placeholder="Codigo de seguridad" name="codigo_seguridad">
        <input type="text" placeholder="Correo electronico" name="email">
        <button type="submit">Validar y enviar</button>
    </form>
</body>
</html>