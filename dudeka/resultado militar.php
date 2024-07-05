<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
     initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $nome = $_REQUEST["nome"];
     $ano = $_REQUEST["ano"];
     $idade = date("Y") - $ano ;
     $idadea = $idade - 19;
     $idadef = 18 - $idade;

     if ($idade >18){
        $alistamento = "<br> vocé tem $idade anos e deverá se alistar, <br> fazem $idadea anos que vocé serviu.";
        echo $alistamento;

     } if ($idade == 18){
        $alistamento = "<br> vocé tem $idade e devera se alistar.";
        echo $alistamento;

     } if($idade <18){
        $alistamento = " <br> vocé tem $idade anos, então não poderá se alistar, <br> no entanto faltam $idadef anos para voé poder se alistar.";
        echo $alistamento;
     }  
    ?>
</body>
</html>