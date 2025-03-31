
<!-- Leia dois números digitados pelo usuário e exiba o resultado da sua soma. -->
<form action="exercicio02.php" method="post">
    <label for="num1">Número 1:</label>
    <input type="number" name="num1" id="num1">
    <br>
    <label for="num2">Número 2:</label>
    <input type="number" name="num2" id="num2">
    <br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $soma = $num1 + $num2;
        echo "A soma de $num1 e $num2 é: $soma";
    } else {
        echo "Por favor, preencha ambos os números.";
    }
}
?>
