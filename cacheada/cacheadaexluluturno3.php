<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário</title>
</head>
<body>
<?php
    $nome = $_REQUEST["nome"];
    $idade = $_GET["idade"];
    $turno = isset($_GET["turno"])?$_GET["turno"]:1;

    ?>
        <div>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="idnome">
        <br>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="ididade">
        <br>
        <input type="radio" name="turno" id="manha" value="1" checked>
        <label for="manha">Manhã.</label>
        <br>
        <input type="radio" name="turno" id="tarde" value="2">
        <label for="tarde">Tarde.</label>
        <br>
        <input type="radio" name="turno" id="noite" value="3">
        <label for="noite">Noite.</label>
        <br>
        <input type="submit" value="enviar">
    </form>
    </div>
    <?php
           if ($idade <= 12){
            switch ($turno) {
             case 1:
                echo "$nome, já pode ajudar em casa.";
                break;
             case 2:
                echo "$nome, pense em uma faculdade.";
                break;
             case 3:
                echo "$nome, está tarde vá dormir.";
                break;
             }
          }elseif ($idade >= 13 && $idade <= 25)
          {
              switch ($turno) {
                case 1:
                    echo "$nome, pode decidir como separa seus estudos.";
                    break;
                case 2:
                    echo "$nome, boa tarde.";
                    break;
                case 3:
                    echo"$nome, melhor dormir.";
                    break;
              }
             } 
                
            elseif($idade >= 10){
           switch ($turno) {
            case 1:
                echo "$nome, trabalhar porque vc nao e herdeiro.";
                break;
            case 2:
                echo "$nome, almoçar para trampar mais.";
                break;
            case 3:
                echo "$nome, passe mais tempo com a familia.";
                break;
           }
         }
 ?>  
</body>
</html>