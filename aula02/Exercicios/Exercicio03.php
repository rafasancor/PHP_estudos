
<!-- Leia os valores de dois números inteiros distintos (variáveis A e B) e informe qual deles é o maior. Caso os números sejam iguais, informe que a sequência é inválida. -->
<form action="exercicio03.php" method="post">
    <label for="A">Número A:</label>
    <input type="number" name="A" id="A">
    <br>
    <label for="B">Número B:</label>
    <input type="number" name="B" id="B">
    <br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['A']) && !empty($_POST['B'])) {
        $A = (int) $_POST['A'];
        $B = (int) $_POST['B'];
        if ($A == $B) {
            echo "Sequência de números informados é inválida.";
        } elseif ($A > $B) {
            echo "O número maior é: $A";
        } else {
            echo "O número maior é: $B";
        }
    } else {
        echo "Por favor, informe ambos os números.";
    }
}
?>
