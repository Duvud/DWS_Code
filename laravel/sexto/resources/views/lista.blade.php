<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListaProducto</title>
</head>
<body>
    @for($i =1;$i<101;$i++)
    <a href="procesarProducto/{{$tipoProducto}}/{{$i}}">producto/{{$tipoProducto}}/{{$i}}</a>   
    @endfor
</body>
</html>