<?php

if(isset($_GET['id'])){
 $id = strip_tags($_GET['id']);
 var_dump($id);
}
?>
</php><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="carrinho.css">
    <title>Carrinho de Compras - Fascino</title>
</head>
<body>
    <header>
        <h1>✨Fascino✨</h1>
        <nav>
            <a href="principal.php">Início</a>
        </nav>
    </header>
    <main>
        <h2>Carrinho de Compras</h2>
        <table id="carrinho-table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Total</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Colar de Pérolas</td>
                    <td>1</td>
                    <td>R$ 200,00</td>
                    <td>R$ 200,00</td>
                    <td><button>Remover</button></td>
                </tr>
                <tr>
                    <td>Brincos de Prata</td>
                    <td>2</td>
                    <td>R$ 150,00</td>
                    <td>R$ 300,00</td>
                    <td><button>Remover</button></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td>R$ 500,00</td>
                    <td></td>
                </tr>
            </tfoot>
        </table>
        <a href="final.html"><button>Finalizar compra</button></a>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Fascino Joias. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
