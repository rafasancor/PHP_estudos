<?php

function form_nao_enviado()
{
    return $_SERVER['REQUEST_METHOD'] !== 'POST';
}

function form_em_branco()
{
    return empty($_POST['usuario']) || empty($_POST['senha']);
}

function tratar_erros()
{

    if (!isset($_GET['code'])) {
        return;
    }

    $code = (int)$_GET['code'];

    switch ($code) {

        case 0:
            $erro = '<h3>Você não tem permissão para acessar a página de destino</h3>';
            break;

        case 1:
            $erro = '<h3>Usuário ou senha inválidos. Tente novamente</h3>';
            break;

        case 2:
            $erro = '<h2>Por favor, preencha todos os campos do form</h2>';
            break;

        default:
            $erro = "";
            break;
    }

    echo $erro;
}
?>