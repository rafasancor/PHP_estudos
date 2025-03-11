<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Home</title>
</head>
<body>
    <h1>Aula 02 - PHP - Página Inicial</h1>

    <?php 

        $aluno = "Rafael Sancor";  //string
        $curso = "ADS";            //string
        $periodo = 3;              //int

        // \n = aplica uma quebra de linha para o interpretador
        // \t = aplica uma tabulação para o interpretador
        echo "Nome do aluno: " . $aluno . "<br>";                  //concatenação (mais efeciente)
        echo "\n\tCurso: $curso <br>";                            //interpolação
        echo "\n\tPeriodo atual: " . $periodo . "<br>";
    ?>

    <h2>Exemplos de Exercicios</h2>
    
    <ul>   
        <li><a href="exemplo01.php">Exemplo 01</a></li>
    </ul>
</body>
</html>