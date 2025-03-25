<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exemplo de Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Aula 04 - Exemplos de Arrays</h1>

    <p><a href="index.php">Voltar à Home</a></p>
    
    <h1>Cadastro de Produto</h1>
    <form action="exemplo.php" method="post">

        <p>
            <input type="text" name="produto" placeholder="Produto" required>
        </p>

        <p>
            <input type="text" name="marca" placeholder="Marca" required>
        </p>
        
        <p>
            <input type="number" name="quantidade" placeholder="Quantidade" min="1" required>
        </p>

        <p>
            <input type="number" name="valor" placeholder="Valor R$" min="0" step="0,01" required>
        </p>

        <p>
            <button type="submit">Cadastrar</button>
        </p>
        
    </form>


    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            foreach ($_POST as $chave => $valor) {
                echo ucfirst($chave) . ": " . $valor . "<br>";
            }

            echo "<h3>Debugando o array 'produto'</h3>";

            //print_r($produto);
        }       
    ?>
</body>
</html>