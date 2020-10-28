<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{url('/procesarForm')}}" method="POST">
        @csrf
    <input type="text" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}">
        <input type="text" placeholder="Apellido" name="apellido" value="{{ old('Apellido') }}">
        <input type="text" placeholder="DNI" name="dni" value="{{ old('dni') }}">
        <input type="text" placeholder="Fecha de nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
        <input type="text" placeholder="Sexo" name="sexo" value="{{ old('sexo') }}">
        <input type="text" placeholder="Direccion" name="direccion" value="{{ old('direccion') }}">
        <input type="text" placeholder="Discapacidad" name="discapacidad" value="{{ old('discapacidad') }}">
        <input type="text" placeholder="ID" name="id" value="{{ old('id') }}">
        <input type="text" placeholder="Codigo de seguridad" name="codigo_seguridad">
        <input type="text" placeholder="Correo electronico" name="email" value="{{ old('email') }}">
        <button type="submit">Validar y enviar</button>
    </form>
</body>
</html>