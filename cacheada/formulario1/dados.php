<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dados</title>
    <style>
        body{
            background-color: rgb(255, 200, 235);
        }
    </style>
</head>
<body>
    <header>
    <h1>dados enviados</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $sobrenome = $_GET["idade"];  
        echo "<br>Bom te conhecer $nome de $sobrenome $idade anos! ";
        ?>
        <a href="javascript:history.go(-1)">voltar para a página anterior</a>
    </main>
</body>
</html>