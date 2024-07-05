<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultados</title>
</head>
<body>
    <main>
        <?php
        $ano = $_GET["anonas"];
        $idade = date("Y") - $ano;

        
        /*if ($idade >= 18) {
            $voto = "deve votar";
            $dirigir = "ja pode dirigir";

        }
        else {
            $voto = "nao pode votar";
            $dirigir = "nao pode dirigir";
        }*/
        if ($idade < 16){
            $voto = "nao pode votar";
            $dirigir = "nao pode dirigir";
        }
        else{
            if (($idade > 16 && $idade < 18 )|| ($idade > 65)){
                $voto =  "voto opcional";
                $dirigir = " nao pode dirigir";
            }    
            
        else {
            $voto = "voto obrigatório";
            $dirigir = "pode dirigir";
            }
         }
        echo "<br> com esta idade voce $voto e $dirigir";
        echo "<br>Você nasceu em $ano e terá $idade";
        ?>
    </main>
</body>
</html>