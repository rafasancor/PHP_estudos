
<!-- Leia os valores nas variáveis A e B e efetue a troca dos valores, de forma que o valor de A passe a ser o de B e vice-versa. Apresente uma mensagem com os valores originais e outra com os valores trocados. -->
<form action="exercicio05.php" method="post">
    <label for="A">Valor de A:</label>
    <input type="text" name="A" id="A">
    <br>
    <label for="B">Valor de B:</label>
    <input type="text" name="B" id="B">
    <br>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['A']) && isset($_POST['B'])) {
        $A = $_POST['A'];
        $B = $_POST['B'];
        echo "Valores originais: A = $A, B = $B<br>";
        // Troca dos valores
        $temp = $A;
        $A = $B;
        $B = $temp;
        echo "Valores trocados: A = $A, B = $B";
    } else {
        echo "Por favor, informe os valores de A e B.";
    }
}
?>