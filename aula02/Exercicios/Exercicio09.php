
<!-- Leia dois números (variáveis A e B) e identifique se são iguais ou diferentes. Se forem iguais, informe que são iguais. Se forem diferentes, informe que são diferentes e qual deles é o maior. -->
<form action="exercicio09.php" method="post">
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
        $A = $_POST['A'];
        $B = $_POST['B'];
        if ($A == $B) {
            echo "Os números A e B são iguais.";
        } else {
            echo "Os números A e B são diferentes. ";
            if ($A > $B) {
                echo "O número maior é: $A";
            } else {
                echo "O número maior é: $B";
            }
        }
    } else {
        echo "Por favor, informe os dois números.";
    }
}
?>