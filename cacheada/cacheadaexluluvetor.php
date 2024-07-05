<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vetor</title>
    
</head>
<body>
        <?php
        $opcao = isset ($_GET["mes"]);
        $mes = array ("Jan", "Fev", "Mar", "Abr");
        $dias = array (31, 28, 31, 30);
        echo "O mês $mes[$opcao] tem $dias[$opcao]";
        ?>
</body>
</html>