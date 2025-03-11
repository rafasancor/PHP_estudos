<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Exemplo 01</title>
</head>
<body>

    <p><a href="index.php">Voltar para Home</a></p>

    <h1>Exemplo 01</h1>
    <p>Informe um número inteiro entre 1 e 100 para verificar se ele é par, ou ímpar</p>

    <form action="exemplo01.php" method="post">

        <p>
            <label for="valor">Valor:</label>
            <input type="number" name="valor" min="1" max="100" required>
        </p>
        
        <p>
            <button type="submit">Verificar</button>
            <!-- <input type="submit" value="Verificar"> -->
        </p>
 
    </form>

    <?php 

        //verificar se o campo 'valor' foi enviado (se ele não esta vazio)

        if (!empty($_POST['valor'])) {

            // a variável $valor irá receber o campo do formulário com o nome "valor" enviado via post
            $valor = $_POST['valor'];

            //verificar se o valor é par ou ímpar
            if($valor % 2 == 0) {
                echo "<h3>$valor é par!</h3>";
            }
            else {
                echo "<h3>$valor é ímpar!</h3>";
            }

        }

    ?>
    
</body>
</html>