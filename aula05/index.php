<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos de Aparelhos Eletrônicos</title>
</head>
<body>
    <h1>Prova - Sistema de Gastos de Aparelhos Eletrônicos</h1>

    <h1>Cadastro de Aparelho</h1>

    <form action="cadastro.php" method="post">
        <p>Nome do dispositivo eletrônico:</p>
        <p>
            <input type="text" name="aparelho" placeholder="Aparelho" required>
        </p>
        <p>Potência máxima do aparelho em watts:</p>
        <p>
            <input type="number" name="consumoMax" placeholder="Consumo máximo" required>
        </p>
        <p>Quantidade de horas por dia que o aparelho fica ligado:</p>
        <p>
            <input type="number" name="numHoras" placeholder="Número de horas" min="1" required>
        </p>
        <p>Quantidade de dias no mês que o aparelho será utilizado:</p>
        <p>
            <input type="number" name="numDias" placeholder="Número de dias" min="1" required>
        </p>
        <p>Preço do kilowatt-hora cobrado na conta de energia:</p>
        <p>
            <input type="number" name="valorKw" placeholder="Valor do kilowatt" min="1" required>
        </p>

        <p>
            <button type="submit">Cadastrar</button>
        </p>
        
    </form>

</body>
</html>