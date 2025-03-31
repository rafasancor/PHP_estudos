
<!-- Leia um número digitado pelo usuário e mostre a mensagem "Número maior do que 10!" caso o número seja maior, ou "Número menor ou igual a 10!" se o número for menor ou igual. -->

<form action="exercicio01.php" method="post">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero">
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validação com !empty(); 
    if (!empty($_POST['numero'])) {
        $numero = $_POST['numero'];
        if ($numero > 10) {
            echo "Número maior do que 10!";
        } else {
            echo "Número menor ou igual a 10!";
        }
    } else {
        echo "Por favor, digite um número.";
    }
}
?>

