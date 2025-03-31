<form action="nome_do_arquivo.php" method="post">
  <!-- campos do formulário -->
  <button type="submit">Enviar</button>
</form>


<!-- - Em cada exercício, os dados são enviados via método POST, e as variáveis superglobais **$_POST** e **$_SERVER** são utilizadas para acessar os valores e verificar o método da requisição.
- A validação com `!empty()` garante que os campos não estejam vazios; alternativas como `isset()` e a verificação de `$_SERVER['REQUEST_METHOD'] == 'POST'` podem ser utilizadas conforme a necessidade. -->