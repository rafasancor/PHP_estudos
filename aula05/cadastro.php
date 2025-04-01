<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>

</head>
<body>
    <h1>Prova - Cadastro de Aparelhos Eletrônicos</h1>

    <p><a href="index.php">Voltar à Home</a></p>

    <h1>Cadastro de Aparelhos</h1>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $dados = $_POST;

            if (!empty($dados['aparelho']) && !empty($dados['consumoMax']) && !empty($dados['numHoras']) && !empty($dados['numDias']) && !empty($dados['valorKw'])) {
                echo"<h2>Informações do aparelho:</h2>";

                echo "Aparelho: " . $dados['aparelho'] . "<br>";
                echo "Consumo Máximo: " . $dados['consumoMax'] . "<br>";
                echo "Número de horas: " . $dados['numHoras'] . "<br>";
                echo "Número de dias: " . $dados['numDias'] . "<br>";
                echo "Valor Kw: " . $dados['valorKw'] . "<br>";
            } else {
                echo "<h3>Preencher todos os campos no form da Home</h3>";
            }

            echo"<h2>Consumo Diário do Aparelho</h2>";

            $consumoKw = $dados['consumoMax'] / 1000;
            $consumoDiario = $consumoKw * $dados['numHoras'];

            echo "Consumo em Kilowatts: " . $consumoKw . " kW <br>";
            echo "Consumo Diário: " . $consumoDiario . " kWh <br>";


            echo"<h2>Consumo Mensal do Aparelho</h2>";
            $consumoMensal = $consumoDiario * $dados['numDias'];
            echo "Consumo Mensal: " . $consumoMensal . " kWh <br>";


            echo"<h2>Consumo do Aparelho em reais</h2>";
            $valorConsumo = $consumoMensal * $dados['valorKw'];
            echo "Valor do Consumo: R$" . $valorConsumo . "<br>";


            echo"<h2>Categoria do consumo mensal</h2>";
            if ($valorConsumo <= 5) {
                echo"Consumo de Nível: Baixo";
            } else if ($valorConsumo < 10) {
                echo"Consumo de Nível: Moderado";
            } else {
                echo"Consumo de Nível: Elevado";
            }

        } else {
            echo"<h3>ATENÇÃO: Nenhum dado de cliente foi enviado!</h3>";
        }

    ?>

</body>
</html>