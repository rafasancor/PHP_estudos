<?php require_once 'functions.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Calculos</title>
</head>
<body>
    <h1>Aula 06 - Calculos</h1>

    <?php
        if (!validar_form()) {
            echo "Necessário chegar via envio de formulário.";
            exit; // interrompe a execução do script
        }
        

        if (!verificar_campos_em_branco()) {
            echo "Os dois valores preicsam ser preenchidos!";
            exit;
        }

        if (!verificar_valor_numerico()) {
            echo"Os dois valores precisam ser valores numéricos!";
            exit;
        }

        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];

        $soma = $valor1 + $valor2;
        $subtracao = $valor1 - $valor2;
        $multiplicacao = $valor1 * $valor2;
        $divisao = $valor2 == 0 ? 0 : $valor1 / $valor2;


        echo "Soma: $valor1 + $valor2 = $soma<br>";
        echo "Subtração: $valor1 - $valor2 = $subtracao<br>";
        echo "Multiplicação: $valor1 * $valor2 = $multiplicacao<br>";
        echo "Divisão: $valor1 / $valor2 = $divisao<br>";

    ?>
    
</body>
</html>