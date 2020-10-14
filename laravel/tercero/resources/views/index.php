<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php 
    $url = 'producto/aaa0000';
    $contenidos = file_get_contents($url);
    echo $contenidos;
    ?>
</body>
</html>