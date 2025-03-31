
<!-- Leia um número e mostre uma mensagem caso ele seja maior ou igual a 50 e outra se for menor que 50. -->
<form action="exercicio08.php" method="post">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero">
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['numero'])) {
        $numero = $_POST['numero'];
        if ($numero >= 50) {
            echo "O número $numero é maior ou igual a 50.";
        } else {
            echo "O número $numero é menor que 50.";
        }
    } else {
        echo "Por favor, informe um número.";
    }
}
?>