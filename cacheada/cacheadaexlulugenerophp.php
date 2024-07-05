<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <?php
        $nome = $_GET["nome"];
        $genero = isset($_GET["genero"]) ? ($_GET)["genero"]:"0";
        switch ($genero) {
            case 1:
                $mensagem = "Bem feito é melhor que bem dito!";
                break;

            case 2:
                $mensagem="A beleza da mulher está nas curvas da alma!";
        }
        echo("$nome, $mensagem")
        ?>
    </center>
</body>
</html>