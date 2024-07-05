<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'exobjmaria.php';
    $c1 = new Celular;
    $c1-> modelo = "Iphone 12";
    $c1-> marca = "Apple";
    $c1-> numero = 84073466;
    $c1-> cor = "preto";
    $c1-> ligado = true;

    print_r($c1)

    ?>
</body>
</html>