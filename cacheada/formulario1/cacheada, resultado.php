<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <main>
        <h1>apresentando o resultado</h1>
        <p>
            <?php
                $numero = $_REQUEST["numero"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "o número escolhido foi <strog> $numero </strog>";
                echo "<br> seu antecessor é $antecessor";
                echo "<br> seu sucessor é $sucessor";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;voltar</button>
    </main>
</body>
</html>