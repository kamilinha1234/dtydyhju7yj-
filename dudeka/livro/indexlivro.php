<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livro</title>
</head>
<body>
<?php
    require_once 'livro.php';
    $l1 = new livro;
    $l1-> nautor = " diario de um banana ";
    $l1-> genero = "infantil";
    $l1-> dtlançamento = 224;
    $l1->aberto = true;

    $l1->abrir();
    $l1->folhear();

    print_r($l1);
    

    ?>
</body>
</html>
</body>
</html>