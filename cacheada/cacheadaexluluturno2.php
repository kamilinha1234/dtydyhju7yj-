<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
     <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <legend>informe seu turno:</legend>
        <input type="radio" name="turno" id="turno" value="1">
        <label for="turno"> manhã. </label>
        <input type="radio" name="turno" id="turno" value="2">
        <label for="turno"> tarde.  </label>
        <input type="radio" name="turno" id="turno" value="3">
        <label for="turno"> noite. </label>
        <label for="nome ">nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="nome">idade:</label>
        <input type="number " name="anos" id="anos">
        <input type="submit" value="enviar formulario ">
        <?php
    $name  = $_REQUEST["nome"];
    $idade = $_GET["idade"];
    $turno = isset($_GET["turno"])?$_GET["turno"]:1; 
     
     if($idade <= 12){
         switch($turno){
             case 1 :
                echo "$name, já pode ajudar em casa.";
                break;
                
                case 2 :
                echo"$name, pense em uma faculdade. ";
                break;

                case 3 :
                    echo"$name, está tarde vá dormir.";
                    break;

    }
     }
     if($idade >= 13 && $idade  <=25){
    switch ($turno){
        case 1:
            echo "$name, pode decidir como separa seus estudos. ";
            break;

            case 2 :
                echo "$name, boa tarde.";
                break;

                case 3 :
                    echo "$name, melhor dormir.";
                     break;
    }
     }
     if ($idade > 25 ){
        switch ($turno ){
            case 1 :
                echo "$name, trabalhar porque vc nao e herdeiro. ";
                break;
                case 2 :
                    echo "$name, almoçar para trampar mais. ";
                    break;
                    case 3 :
                     echo"$name, passe mais tempo com a familia. ";
                     break;
        }
     }
     ?>
     </form>
</body>
</html>