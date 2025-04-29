<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Home</title>
</head>
<body>
    <h1>Aula 09 - Home</h1>

    <p>
        <a href="clientes.php">Ver clientes cadastrados</a>
    </p>

    <h2>Cadastro</h2>

    <form action="salvar.php" method="post">

    <p>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </p>

    <p>
        <label for="fone">Fone:</label>
        <input type="text" name="fone" id="fone">
    </p>

    <p>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
    </p>

    <button type="submit">Cadastrar</button>

    </form>


</body>
</html>