<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $total = $_GET["a"]; 
     $porcentagem = $_GET["b"];
     $desconto = (($total*$porcentagem)/100);
     echo "o valor da compra é de " . ($total-$desconto);
    ?>
</body>
</html>