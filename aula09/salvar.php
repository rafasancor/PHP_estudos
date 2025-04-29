<?php require_once 'validacoes.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Salvar Cliente</title>
</head>
<body>

    <h1>Aula 09 - Salvar Cliente</h1>

    <p><a href="index.php">Voltar à home</a></p>

    <?php 

        if(form_nao_enviado()){
            exit("<h3>Por favor, retorne a home e preencha o formulário.</h3>");
        }

        if(ha_campos_em_branco($_POST)) {
            exit("<h3>Por favor, preencha todos os campos do formulário.</h3>");
        }

        require_once 'conexao.php'; //inclui o arquivo de conexão

        //armazenar dados do form em variáveis locais
        $nome = $_POST['nome'];
        $fone = $_POST['fone'];
        $email = $_POST['email'];

        //estabelecer a conexão com o banco de dados
        $conn = conectar_banco();

        $sql = "INSERT INTO tb_clientes (nome, fone, email)
                
                VALUES (?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) { //se houver algum erro na estrutura sql
            exit("Erro na preparação da consulta. Preencha o fomrulário novamente");
        }

        //bind (associação) dos parametros
        //vamos substituir as '?' pelos valores das varáveis

        mysqli_stmt_bind_param($stmt, "sss", $nome, $fone, $email);

        //executa o comando e verifica o retorno
        if (mysqli_stmt_execute($stmt)) {
            echo"<h3>Cliente cadastrado com sucesso.</h3>";
        } else {
            echo"<h3>Erro ao salvar: " . mysqli_stmt_error($stmt) . "</h3>";
        }

        mysqli_close($conn);

    ?>
</body>
</html>