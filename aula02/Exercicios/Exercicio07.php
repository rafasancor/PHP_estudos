
<!-- Leia um número e informe, através de uma mensagem, se ele está no intervalo entre 100 e 200. Caso esteja fora desse intervalo, solicite ao usuário que digite novamente, até que a condição seja atendida. -->
<form action="exercicio07.php" method="post">
    <label for="numero">Digite um número entre 100 e 200:</label>
    <input type="number" name="numero" id="numero">
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['numero'])) {
        $numero = $_POST['numero'];
        if ($numero >= 100 && $numero <= 200) {
            echo "O número $numero está no intervalo entre 100 e 200.";
        } else {
            echo "Número fora do intervalo. Por favor, digite um número entre 100 e 200.";
        }
    } else {
        echo "Por favor, informe um número.";
    }
}
?>