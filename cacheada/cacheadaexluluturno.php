<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<label for="nome">Nome:</label>
    <input type="text" name="text" id="text">
    <input type="submit" value="enviar">
    <br>

    <label for="nome">Idade:</label>
    <input type="number" name="number" id="number">
    <input type="submit" value="enviar">
    <br>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <fieldset><legend> Informe o turno: </legend>
        <input type="radio" nome="anos" id="turno" value="1">
        <label for="anos">Manhã.</label>
        <input type="radio" nome="anos" id="turno" value="2">
        <label for="anos">Tarde.</label>
        <input type="radio" nome="anos" id="turno" value="3">
        <label for="anos">Noite.</label>
        <br>
        <input type="submit" value="enviar formulario">
    </form>

    <?php
    if($idade <=12){
        switch($hr)case 1:
            echo"$nome, mensagem";
            break;

            case 2:
                echo"$nome, mensagem";
                break;

                case 3:
                    echo"$nome, mensagem";
                    break;
    }elseif
    ($idade >=13 && $idade <=25){
        switch($hr){
            case 1:
                echo"$nome, mensagem";
                break;
        }
    }
    ?>
</body>
</html>