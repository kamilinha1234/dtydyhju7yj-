<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
    <link rel="stylesheet" href="cacheada.css">
</head>
<body>
    <div>
        <?php
        $numero = isset ($_GET["num"])?$_GET["num"]:1;
        for ($contador=1; $contador <=10; $contador++)
        {
            $resultado = $numero * $contador;
            echo "$numero x $contador = $resultado </br>";
        }
        ?>
        <a href="cacheadaexlulutabuada.php">voltar</a>
    </div>
</body>
</html>