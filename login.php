<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<header>
<div class="container">
<h1>✨Fascino✨</h1>
<nav>
<ul>
<li><a href="principal.php">Início</a></li>
<li><a href="carrinho.php">Carrinho</a></li> <!-- Link para a página do carrinho -->
</ul>
</nav>
</div>
</header>
<h2>Login</h2>
            <form>
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required>
                </div>
    
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>
                </div>
    
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
    
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" required>
                </div>

                <div class="form-group">
                    <label for="num_cart">Número do cartão:</label>
                    <input type="number" id="num_cart" name="num_cart" required>
                </div>
    
                <button type="submit">Enviar</button>
            </form>
        </div>
        <?php
     require_once ("class/db.class.php");

     $con = new Database();
     $link = $con->getConexao();

     if (isset($_GET) ) {
            $nome = $_GET['nome'] ?? "julia"; 
            $telefone = $_GET['telefone'] ?? 43111111111;
            $cpf = $_GET['cpf'] ?? 11111111111;
            $num_cartao = $_GET['num_cart'] ?? 3111111111111 ;
            $email = $_GET['email'] ?? "juju@gmail.com" ;
           

            $smtm = $link->prepare("INSERT INTO principal (nome, telefone, cpf, num_cartao, email)
            VALUES ('$nome', '$telefone', '$cpf', '$num_cartao', '$email')");

            $smtm->execute();
        }
        
    ?>
</body>
</html>