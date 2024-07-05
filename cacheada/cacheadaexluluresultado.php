<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pedido-bebidas</title>
</head>
<body>
    <div>
        <?php
        $qntd = isset($_GET["qntd"])?$_GET["qntd"]:0;
        $beb = isset($_GET["beb"])?$_GET["beb"]:1;
        switch ($beb) {
            case 1:
                $pedido = $qntd * 3;
                $escolhe = "café";
                break;

            case 2:
                $pedido = $qntd * 8;
                $escolha = "capuccino";
                break;

            case 3:
                $pedido = $qntd * 5;
                $escolha = "refrigerante";
                break;
            
            case 4:
                $pedido = $qntd * 6;
                $escolha = "suco";
        }
        echo "voce pediu $qntd $escolha, irá pagar $pedido.";
        ?>
    </div>
    <p><a href="javascript:history.go(-1)">voltar para a página anteriror</p>
</body>
</html>