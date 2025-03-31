
<!-- Leia dois números e mostre, ao final, a soma, subtração, multiplicação e divisão dos números lidos. -->
<form action="exercicio04.php" method="post">
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
        $sub = $num1 - $num2;
        $mult = $num1 * $num2;
        if ($num2 != 0) {
            $div = $num1 / $num2;
        } else {
            $div = "Divisão por zero não é permitida.";
        }
        echo "Soma: $soma<br>";
        echo "Subtração: $sub<br>";
        echo "Multiplicação: $mult<br>";
        echo "Divisão: $div";
    } else {
        echo "Por favor, preencha ambos os números.";
    }
}
?>