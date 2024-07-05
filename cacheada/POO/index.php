<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Classes</title>
</head>
<body>
    <?php
    require_once 'caderno.php';
    $c1 = new caderno;
    $c1->tipo = "espiral";
    $c1->cor = "azul";
    $c1->nfolhas = 200;
    $c1->aberto = true;

    $c1->fechar();
    $c1->folhear();

    print_r($c1);

    ?>
</body>
</html>