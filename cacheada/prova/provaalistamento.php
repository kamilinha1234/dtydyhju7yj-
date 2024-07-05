<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $nascimento = $_GET["nasc"];
    $idade = date("Y") - $nascimento;

    if ($idade < 18){
        echo "$nome, voce tem $idade anos e ainda faltam ", 18 - $idade, " ano(s) para o alistamento!";
    } elseif ($idade == 18){
        echo "$nome, voce tem $idade anos e já está na hora de se alistar!";
    } elseif ($idade > 18){
        echo " $nome voce tem $idade anos e já passou", $idade  18, "ano(s) do alistamento.";
    }
    ?>
</body>
</html>