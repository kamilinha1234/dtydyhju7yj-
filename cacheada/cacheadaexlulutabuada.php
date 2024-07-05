<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabuada</title>
    <link rel="stylesheet" href="cacheada.css">
    <link rel="shortcut icon" href="nana.ico" type="image/x-icon">
</head>
<body>
    <div>
        <form action="cacheadaexlulutabuada2.php" method="get">
            <select name="num" id="idnum">
                <?php
                for ($c=1; $c <= 10; $c++){
                    echo "<option> $c </optio>";
                }
                ?>
            </select>
            <input type="submit" value="tabuada">
        </form>
    </div>
</body>
</html>