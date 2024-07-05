<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Preferências</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
            background-color: blueviolet;
            font-size: 18px;
        }
        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .question {
            margin-bottom: 20px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }
        .question p {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .options label {
            margin-right: 20px;
            font-size: 20px;
        }
        input[type="text"],
        input[type="radio"] {
            margin-right: 10px;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 12px 24px;
            font-size: 20px;
            background-color: palevioletred;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: pink;
        }
        .result {
            margin-top: 30px;
            font-size: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulário de Preferências</h2>

    <!-- Formulário de Perguntas -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <?php
        // Definição das perguntas e respostas de todas as séries
        $series = array(
            'A' => array(
                array('id' => 'q1', 'pergunta' => '1)Escrevo listas daquilo que tenho que fazer?'),
                array('id' => 'q2', 'pergunta' => '2)Realizo coisas desde que as instruções escritas sejam bem detalhadas?'),
                array('id' => 'q3', 'pergunta' => '3)Gosto de fazer palavras cruzadas?'),
                array('id' => 'q4', 'pergunta' => '4)Gosto de exposições e museus?'),
                array('id' => 'q5', 'pergunta' => '5)Localizo-me com facilidade, numa cidade nova, se eu tiver um mapa?'),
                array('id' => 'q6', 'pergunta' => '6)Todos os meses assisto vários filmes?'),
                array('id' => 'q7', 'pergunta' => '7)Não tenho boa impressão de alguém, se estiver malvestido?'),
                array('id' => 'q8', 'pergunta' => '8)Gosto de observar as pessoas?'),
                array('id' => 'q9', 'pergunta' => '9)Acho que flores realmente embelezam a casa e o escritório?'),
                array('id' => 'q10', 'pergunta' => '10)Mando consertar os arranhões do meu carro o mais rápido possível?')
            ), 
            'B' => array(
                array('id' => 'q11', 'pergunta' => '11)Gosto de longas conversas?'),
                array('id' => 'q12', 'pergunta' => '12)Gosto de programas de entrevistas, na rádio ou TV?'),
                array('id' => 'q13', 'pergunta' => '13)Sou bom ouvinte?'),
                array('id' => 'q14', 'pergunta' => '14)Prefiro os noticiários de rádio e TV do que jornais e revistas?'),
                array('id' => 'q15', 'pergunta' => '15)Localizo-me com facilidade, numa cidade nova, se eu tiver um mapa?'),
                array('id' => 'q16', 'pergunta' => '16)Todos os meses assisto vários filmes?'),
                array('id' => 'q17', 'pergunta' => '17)Não tenho boa impressão de alguém, se estiver malvestido?'),
                array('id' => 'q18', 'pergunta' => '18)Gosto de observar as pessoas?'),
                array('id' => 'q19', 'pergunta' => '19)Acho que flores realmente embelezam a casa e o escritório?'),
                array('id' => 'q20', 'pergunta' => '20)Mando consertar os arranhões do meu carro o mais rápido possível?')
            ),
            'C' => array(
                array('id' => 'q21', 'pergunta' => '21)Quando ouço música, não consigo deixar de mexer as mãos ou pés?'),
                array('id' => 'q22', 'pergunta' => '22)Gosto muito de estar ao ar livre?'),
                array('id' => 'q23', 'pergunta' => '23)Tenho boa coordenação motora?'),
                array('id' => 'q24', 'pergunta' => '24)Tenho tendência a ganhar peso?'),
                array('id' => 'q25', 'pergunta' => '25)Gosto de criar animais de estimação?'),
                array('id' => 'q26', 'pergunta' => '26)Toco as pessoas quando converso?'),
                array('id' => 'q27', 'pergunta' => '27)Gosto mais de praticar esportes do que assistir?'),
                array('id' => 'q28', 'pergunta' => '28)Adoro banho, piscina, sauna?'),
                array('id' => 'q29', 'pergunta' => '29)Gosto de levantar-me e espreguiçar-me com frequência?'),
                array('id' => 'q30', 'pergunta' => '30)Posso dizer muito sobre uma pessoa através de seu aperto de mão?')
            )
        );

        // Processamento das respostas de todas as séries
        $totalSimA = 0;
        $totalSimB = 0;
        $totalSimC = 0;

        foreach ($series as $serie => $perguntas) {
            echo '<div class="serie">';
            echo '<h2>Série ' . $serie . '</h2>';
            foreach ($perguntas as $pergunta) {
                echo '<div class="question">';
                echo '<p>' . $pergunta['pergunta'] . '</p>';
                echo '<div class="options">';
                echo '<label><input type="radio" name="' . $pergunta['id'] . '" value="1"> Sim</label>';
                echo '<label><input type="radio" name="' . $pergunta['id'] . '" value="0"> Não</label>';
                echo '</div>';
                echo '</div>';

                // Contagem de respostas 'Sim'
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST[$pergunta['id']])) {
                        if ($_POST[$pergunta['id']] == 1) {
                            if ($serie == 'A') {
                                $totalSimA++;
                            } elseif ($serie == 'B') {
                                $totalSimB++;
                            } elseif ($serie == 'C') {
                                $totalSimC++;
                            }
                        }
                    }
                }
            }
            echo '</div>';
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php
    // Exibição dos resultados e determinação da preferência dominante
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura o nome enviado pelo formulário
        $nome = $_POST['nome'];
        
        echo '<div class="result">';
        echo '<h3>Resultado para ' . $nome . ':</h3>';
        echo '<p>Total de "Sim" Série A: ' . $totalSimA . '</p>';
        echo '<p>Total de "Sim" Série B: ' . $totalSimB . '</p>';
        echo '<p>Total de "Sim" Série C: ' . $totalSimC . '</p>';

        // Determinação da preferência dominante
        if ($totalSimA > $totalSimB && $totalSimA > $totalSimC) {
            echo '<p>' . $nome . ', a pessoa visual é aquele tipo de pessoa que gosta de ver! Ela presta atenção em detalhes físicos, cores, formatos... Se você perceber, por exemplo, que no seu interlocutor predomina o canal de percepção visual, é interessante que você inclua na sua conversa informações que ele possa ver.</p>';
        } elseif ($totalSimB > $totalSimA && $totalSimB > $totalSimC) {
            echo '<p>' . $nome . ', as pessoas auditivas são aquelas que aprendem melhor através do som e da fala. Eles tendem a ser bons em lembrar de nomes, datas, histórias e outras informações que foram contadas a eles verbalmente. Eles podem ter dificuldade em lembrar de informações visuais sem uma explicação verbal para acompanhá-las..</p>';
        } elseif ($totalSimC > $totalSimA && $totalSimC > $totalSimB) {
            echo '<p>' . $nome . ', este perfil está relacionado com os estímulos recebidos pelo tato, movimento, pelas sensações. O foco do aprendizado está em situações práticas, experimentos, montar e desmontar objetos, ou seja, “colocar a mão na massa”, fazer para aprender.</p>';
        } else {
            // Caso de empate entre as preferências
            if ($totalSimA == $totalSimB && $totalSimB == $totalSimC) {
                echo '<p>' . $nome . ', você tem uma preferência equilibrada entre visual, auditiva e sinestésica.</p>';
            } elseif ($totalSimA == $totalSimB) {
                echo '<p>' . $nome . ', você tem uma preferência equilibrada entre visual e auditiva.</p>';
            } elseif ($totalSimA == $totalSimC) {
                echo '<p>' . $nome . ', você tem uma preferência equilibrada entre visual e sinestésica.</p>';
            } elseif ($totalSimB == $totalSimC) {
                echo '<p>' . $nome . ', você tem uma preferência equilibrada entre auditiva e sinestésica.</p>';
            }
        }
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
