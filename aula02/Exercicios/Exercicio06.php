
<!-- Leia uma temperatura em graus Celsius e apresente-a convertida em graus Fahrenheit.

Fórmula de conversão: F = (9 * C + 160) / 5 -->
<form action="exercicio06.php" method="post">
    <label for="celsius">Temperatura em °C:</label>
    <input type="number" name="celsius" id="celsius" step="any">
    <br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['celsius'])) {
        $celsius = $_POST['celsius'];
        $fahrenheit = (9 * $celsius + 160) / 5;
        echo "$celsius °C equivalem a $fahrenheit °F";
    } else {
        echo "Por favor, informe a temperatura em Celsius.";
    }
}
?>