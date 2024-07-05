<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exlivro</title>
</head>
<body>
<?php
    require_once 'exlivro.php';
    $l1 = new livro;
    $l1-> nautor = " Vitor Martins ";
    $l1-> genero = "romance";
    $l1-> dtlançamento = 2015;
    $l1->aberto = true;

    $l1->abrir();
    $l1->folhear();

    print_r($l1);
    echo "<br>";

    $l2 = new livro;
    $l2-> nautor = " Antoine de Saint-Exupéry ";
    $l2-> genero = "aventura";
    $l2-> dtlançamento = 2015;
    $l2->aberto = true;

    $l2->abrir();
    $l2->folhear();

    print_r($l2);

    ?>
</body>
</html>
</body>
</html>