
<!-- Leia um número de 1 a 50 e exiba, na tela, todos os números do valor digitado até o número 50. Se o usuário digitar um valor fora desse intervalo, exiba a mensagem "Número inválido!" e solicite uma nova entrada. -->
<form action="exercicio10.php" method="post">
    <label for="numero">Digite um número de 1 a 50:</label>
    <input type="number" name="numero" id="numero">
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['numero'])) {
        $numero = $_POST['numero'];
        if ($numero >= 1 && $numero <= 50) {
            for ($i = $numero; $i <= 50; $i++) {
                echo $i . "<br>";
            }
        } else {
            echo "Número inválido! Por favor, digite um número de 1 a 50.";
        }
    } else {
        echo "Por favor, informe um número.";
    }
}
?>