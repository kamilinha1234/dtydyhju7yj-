<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Preferências</title>
    <label for="nome">nome:</label>
          <input type="text" nome="text" id="text">
    <style>
        body {
            font-family: Arial, sans-serif;
      
            background-color:blueviolet;
                }
        .question {
            margin-bottom: 15px;
        }
        .options label {
            margin-right: 15px;
        }
    </style>
</head>
<body>

<h2>Formulário de Preferências</h2>
<h2>serie A</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
    <div class="question">
        1. Escrevo listas daquilo que tenho que fazer
        <div class="options">
            <label><input type="radio" name="q1" value="1"> SIM</label>
            <label><input type="radio" name="q1" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        2. Realizo coisas desde que as instruções escritas sejam bem detalhadas
        <div class="options">
            <label><input type="radio" name="q2" value="1"> SIM</label>
            <label><input type="radio" name="q2" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        3. Gosto de fazer palavras cruzadas
        <div class="options">
            <label><input type="radio" name="q3" value="1"> SIM</label>
            <label><input type="radio" name="q3" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        4. Gosto de exposições e museus
        <div class="options">
            <label><input type="radio" name="q4" value="1"> SIM</label>
            <label><input type="radio" name="q4" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        5. Localizo-me com facilidade, numa cidade nova, se eu tiver um mapa
        <div class="options">
            <label><input type="radio" name="q5" value="1"> SIM</label>
            <label><input type="radio" name="q5" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        6. Todos os meses assisto vários filmes
        <div class="options">
            <label><input type="radio" name="q6" value="1"> SIM</label>
            <label><input type="radio" name="q6" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        7. Não tenho boa impressão de alguém, se estiver malvestido
        <div class="options">
            <label><input type="radio" name="q7" value="1"> SIM</label>
            <label><input type="radio" name="q7" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        8. Gosto de observar as pessoas
        <div class="options">
            <label><input type="radio" name="q8" value="1"> SIM</label>
            <label><input type="radio" name="q8" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        9. Acho que flores realmente embelezam a casa e o escritório
        <div class="options">
            <label><input type="radio" name="q9" value="1"> SIM</label>
            <label><input type="radio" name="q9" value="0"> NÃO</label>
        </div>
    </div>
    
    <div class="question">
        10. Mando consertar os arranhões do meu carro o mais rápido possível
        <div class="options">
            <label><input type="radio" name="q10" value="1"> SIM</label>
            <label><input type="radio" name="q10" value="0"> NÃO</label>
        </div>
<hr>

<h2>Série B</h2>
        <div class="question">
        11. gosto de longas conversas 
        <div class="options">
            <label><input type="radio" name="q11" value="1"> Sim</label>
            <label><input type="radio" name="q11" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        12. Gosto de programas de entrevistas , na radio de tv 
        <div class="options">
            <label><input type="radio" name="q12" value="1"> Sim</label>
            <label><input type="radio" name="q12" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        13.sou bom ouvinte 
        <div class="options">
            <label><input type="radio" name="q13" value="1">Sim</label>
            <label><input type="radio" name="q13" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        14.prefiroos noticiarios de radio e tv do que jornais e revistas
        <div class="options">
            <label><input type="radio" name="q14" value="1"> Sim</label>
            <label><input type="radio" name="q14" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        15.Localizo-me com facilidade, numa cidade nova, se eu tiver um mapa
        <div class="options">
            <label><input type="radio" name="q15" value="1"> Sim</label>
            <label><input type="radio" name="q15" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        16. Todos os meses assisto vários filmes
        <div class="options">
            <label><input type="radio" name="q16" value="1"> Sim</label>
            <label><input type="radio" name="q16" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        17. Não tenho boa impressão de alguém, se estiver malvestido
        <div class="options">
            <label><input type="radio" name="q17" value="1"> Sim</label>
            <label><input type="radio" name="q17" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        18. Gosto de observar as pessoas 
        <div class="options">
            <label><input type="radio" name="q18" value="1">Sim</label>
            <label><input type="radio" name="q18" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        19. Acho que flores realmente embelezam a casa e o escritório
        <div class="options">
            <label><input type="radio" name="q19" value="1">Sim</label>
            <label><input type="radio" name="q19" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        20. Mando consertar os arranhões do meu carro o mais rápido possível
        <div class="options">
            <label><input type="radio" name="q20" value="1"> Sim</label>
            <label><input type="radio" name="q20" value="0"> Não</label>
        </div>
        </div>

<hr>
    <h2>Série C</h2>
        <div class="question">
        21. Quando ouço música, não consigo deixar de mexer as mãos ou pés
        <div class="options">
            <label><input type="radio" name="q21" value="1"> Sim</label>
            <label><input type="radio" name="q21" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        22. Gosto muito de estar ao ar livre 
        <div class="options">
            <label><input type="radio" name="q22" value="1"> Sim</label>
            <label><input type="radio" name="q22" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        23. Tenho boa coordenação motora
        <div class="options">
            <label><input type="radio" name="q23" value="1"> Sim</label>
            <label><input type="radio" name="q23" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        24. Tenho tendência a ganhar peso
        <div class="options">
            <label><input type="radio" name="q24" value="1"> Sim</label>
            <label><input type="radio" name="q24" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        25. Gosto de criar animais de estimação
        <div class="options">
            <label><input type="radio" name="q25" value="1"> Sim</label>
            <label><input type="radio" name="q25" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        26.Toco as pessoas quando converso
        <div class="options">
            <label><input type="radio" name="q26" value="1"> Sim</label>
            <label><input type="radio" name="q26" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        27.  Gosto mais de praticar esportes do que assistir
        <div class="options">
            <label><input type="radio" name="q27" value="1"> Sim</label>
            <label><input type="radio" name="q27" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        28.doro banho, piscina, sauna
        <div class="options">
            <label><input type="radio" name="q28" value="1"> Sim</label>
            <label><input type="radio" name="q28" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        29. Gosto de levantar-me e espreguiçar-me com frequência
        <div class="options">
            <label><input type="radio" name="q29" value="1"> Sim</label>
            <label><input type="radio" name="q29" value="0"> Não</label>
        </div>
        </div>

        <div class="question">
        30. Posso dizer muito sobre uma pessoa através de seu aperto de mão
        <div class="options">
            <label><input type="radio" name="q30" value="1"> Sim</label>
            <label><input type="radio" name="q30" value="0"> Não</label>
        </div>
        </div>
    
    <input type="submit" value="Enviar">
    
</form>

<?php
// Processar os resultados do formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valores das respostas
    $q1 = isset($_POST['q1']) ? intval($_POST['q1']) : null;
    $q2 = isset($_POST['q2']) ? intval($_POST['q2']) : null;
    $q3 = isset($_POST['q3']) ? intval($_POST['q3']) : null;
    $q4 = isset($_POST['q4']) ? intval($_POST['q4']) : null;
    $q5 = isset($_POST['q5']) ? intval($_POST['q5']) : null;
    $q6 = isset($_POST['q6']) ? intval($_POST['q6']) : null;
    $q7 = isset($_POST['q7']) ? intval($_POST['q7']) : null;
    $q8 = isset($_POST['q8']) ? intval($_POST['q8']) : null;
    $q9 = isset($_POST['q9']) ? intval($_POST['q9']) : null;
    $q10 = isset($_POST['q10']) ? intval($_POST['q10']) : null;
    
    // Exemplo de como processar os valores
    // Aqui você pode fazer o que precisar com as respostas, como calcular uma pontuação total
    
    // Exemplo simples: Contar quantas concordâncias
    $total_concordancias = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10;
    
    // Exibir resultado
    echo "<h3>Resultado A:</h3>";
    echo "Total de SIM: " . $total_concordancias; 
    // Aqui você pode adicionar lógica adicional para calcular e exibir resultados específicos conforme sua necessidade
    
   
}

// Processar os resultados do formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valores das respostas
    $q11 = isset($_POST['q11']) ? intval($_POST['q11']) : null;
    $q12 = isset($_POST['q12']) ? intval($_POST['q12']) : null;
    $q13 = isset($_POST['q13']) ? intval($_POST['q13']) : null;
    $q14 = isset($_POST['q14']) ? intval($_POST['q14']) : null;
    $q15 = isset($_POST['q15']) ? intval($_POST['q15']) : null;
    $q16 = isset($_POST['q16']) ? intval($_POST['q16']) : null;
    $q17 = isset($_POST['q17']) ? intval($_POST['q17']) : null;
    $q18 = isset($_POST['q18']) ? intval($_POST['q18']) : null;
    $q19 = isset($_POST['q19']) ? intval($_POST['q19']) : null;
    $q20 = isset($_POST['q20']) ? intval($_POST['q20']) : null;
    
    // Exemplo de como processar os valores
    // Aqui você pode fazer o que precisar com as respostas, como calcular uma pontuação total
    
    // Exemplo simples: Contar quantas concordâncias
    $total_concordancias = $q11 + $q12 + $q13 + $q14 + $q15 + $q16 + $q17 + $q18 + $q19 + $q20;
    
    // Exibir resultado
    echo "<h3>Resultado B:</h3>";
    echo "Total de SIM: " . $total_concordancias;
    // Aqui você pode adicionar lógica adicional para calcular e exibir resultados específicos conforme sua necessidade
    
    
    
}
// Processar os resultados do formulário quando enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Valores das respostas
    $q21 = isset($_POST['q21']) ? intval($_POST['q21']) : null;
    $q22 = isset($_POST['q22']) ? intval($_POST['q22']) : null;
    $q23 = isset($_POST['q23']) ? intval($_POST['q23']) : null;
    $q24 = isset($_POST['q24']) ? intval($_POST['q24']) : null;
    $q25 = isset($_POST['q25']) ? intval($_POST['q25']) : null;
    $q26 = isset($_POST['q26']) ? intval($_POST['q26']) : null;
    $q27 = isset($_POST['q27']) ? intval($_POST['q27']) : null;
    $q28 = isset($_POST['q28']) ? intval($_POST['q28']) : null;
    $q29 = isset($_POST['q29']) ? intval($_POST['q29']) : null;
    $q30 = isset($_POST['q30']) ? intval($_POST['q30']) : null;
    
    // Exemplo de como processar os valores
    // Aqui você pode fazer o que precisar com as respostas, como calcular uma pontuação total
    
    // Exemplo simples: Contar quantas concordâncias
    $total_concordancias = $q21 + $q22 + $q23 + $q24 + $q25 + $q26 + $q27 + $q28 + $q29 + $q30;
    
    // Exibir resultado
    echo "<h3>Resultado C:</h3>";
    echo "Total de SIM: " . $total_concordancias;
    // Aqui você pode adicionar lógica adicional para calcular e exibir resultados específicos conforme sua necessidade

}
?>

</body>
</html>